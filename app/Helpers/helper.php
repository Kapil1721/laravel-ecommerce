<?php

function getMaxMinPrice($query = null): array
{
    // Clone the filtered query for price calculations
    $salePriceMax = $query->clone()->max('sale_price');
    $salePriceMin = $query->clone()->min('sale_price');

    // Get filtered product IDs to filter inventories
    $productIds = $query->clone()->pluck('products.id');

    // Now get inventory prices only for these products
    $inventoryPriceMax = App\Models\Inventory::whereIn('product_id', $productIds)->max('price');
    $inventoryPriceMin = App\Models\Inventory::whereIn('product_id', $productIds)->min('price');

    // Final max and min price
    $maxPrice = max($salePriceMax, $inventoryPriceMax);
    $minPrice = min($salePriceMin, $inventoryPriceMin);

    return [
        'max' => (int) $maxPrice ?? 0,
        'min' => (int) $minPrice ?? 0,
    ];
}

function applyFilters($query, $request)
{

    // Filter by category slugs
    if ($request->filled('categories')) {
        $categorySlugs = explode(',', $request->categories);
        $query->whereHas('category', fn($q) => $q->whereIn('slug', $categorySlugs));
    }

    // Filter by price range (either on sale_price or inventory price)
    if ($request->filled('min') && $request->filled('max')) {
        $min = (float) $request->min;
        $max = (float) $request->max;

        $query->where(function ($q) use ($min, $max) {
            $q->whereBetween('sale_price', [$min, $max])
                ->orWhereHas('inventories', fn($q2) => $q2->whereBetween('price', [$min, $max]));
        });
    }

    // Filter by stock availability
    if ($request->stock === 'in-stock') {
        $query->whereHas('inventories', fn($q) => $q->where('qty', '>', 0));
    } elseif ($request->stock === 'out-of-stock') {
        $query->whereDoesntHave('inventories', fn($q) => $q->where('qty', '>', 0));
    }

    $reserved = ['ids', 'inventories', 'with', 'offset', 'categories', 'min', 'max', 'stock', 'limit', 'page'];

    foreach ($request->except($reserved) as $key => $value) {
        if ($request->filled($key)) {
            $values = explode(',', $value);
            $query->whereHas('inventories', function ($subQuery) use ($key, $values) {
                $subQuery->where(function ($q) use ($key, $values) {
                    foreach ($values as $k => $val) {
                        $queryMethod = $k === 0 ? 'where' : 'orWhere';
                        $q->$queryMethod(function ($innerQ) use ($key, $val) {
                            if($key === "Size") {
                                $innerQ->whereJsonContains('variants', ['type' => $key, 'value' => $val]);
                            }
                            else {
                                $innerQ->whereJsonContains('variants', ['type' => $key, 'name' => $val]);
                            }
                        });
                    }
                });
            });
        }
    }

    return $query;
}
