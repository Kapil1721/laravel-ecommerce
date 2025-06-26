const amount_off_product1 = {
    "type": "amount-off-product",
    "method": "code",
    "code": "CM422HEN2Q",
    "title": "",
    "discount_type": "Fixed amount",
    "amount": "100",
    "applies_to": "products",
    "collections": [],
    "products":
    // [
    //     {
    //         "id": 13,
    //         "inventories": [
    //             35,
    //             36,
    //             37
    //         ]
    //     },
    //     {
    //         "id": 14,
    //         "inventories": [
    //             38,
    //             40,
    //             42,
    //             43
    //         ]
    //     }
    // ],
    [
        {
            13: {
                "inventories": [
                    35,
                    36,
                    37
                ]
            },
            14: {
                "inventories": [
                    35,
                    36,
                    37
                ]
            },
        }

    ],
    "requirement": "minimum_purchase_amount",
    "min_amount": "1000",
    "min_qty": "",
    "buys": "minimum_quantity_items",
    "gets_qty": "",
    "gets_applies_to": "collections",
    "gets_collections": [],
    "gets_products": [],
    "discounted_value_type": "percentage",
    "eligibility_country": "all",
    "countries": [],
    "exclude_shipping_over_a_amount": false,
    "shipping_amount": "",
    "eligibility": "all",
    "customers": [],
    "limit_total_usage": true,
    "total_usage": "50",
    "once_per_customer": true,
    "start_date": "2025-07-01",
    "start_time": "00:00",
    "set_end_date": true,
    "end_date": "2025-07-31",
    "end_time": "23:47"
};
const amount_off_product2 = {
    "type": "amount-off-product",
    "method": "automatic",
    "code": "",
    "title": "Summer Sale",
    "discount_type": "percentage",
    "amount": "10",
    "applies_to": "collections",
    "collections": [
        39,
        45,
        44
    ],
    "products": [],
    "requirement": "no_minimum_requirements",
    "min_amount": "",
    "min_qty": "",
    "buys": "minimum_quantity_items",
    "gets_qty": "",
    "gets_applies_to": "collections",
    "gets_collections": [],
    "gets_products": [],
    "discounted_value_type": "percentage",
    "eligibility_country": "all",
    "countries": [],
    "exclude_shipping_over_a_amount": false,
    "shipping_amount": "",
    "eligibility": "specific",
    "customers": [
        2,
        30
    ],
    "limit_total_usage": true,
    "total_usage": "100",
    "once_per_customer": true,
    "start_date": "2025-07-01",
    "start_time": "00:00",
    "set_end_date": true,
    "end_date": "2025-07-31",
    "end_time": "12:59"
}
