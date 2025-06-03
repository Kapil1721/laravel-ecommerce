<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['amount-off-product', 'amount-off-order', 'buy-x-get-y', 'free-shipping'])->default('amount-off-product');
            $table->enum('method', ['code', 'automatic'])->default('code');
            $table->string('code')->nullable();
            $table->string('title')->nullable();
            $table->enum('discount_type', ['fixed', 'percentage', 'free'])->default('fixed');
            $table->decimal('amount', 10, 2)->nullable();
            $table->enum('applies_to', ['collections', 'products'])->default('products');
          
            $table->enum('requirement', ['no_minimum_requirements', 'minimum_purchase_amount', 'minimum_quantity_items'])->default('no_minimum_requirements');
            $table->decimal('min_amount', 10, 2)->nullable();
            $table->integer('min_qty')->nullable();
            $table->enum('buys', ['minimum_quantity_items', 'minimum_purchase_amount'])->default('minimum_quantity_items');
            $table->integer('gets_qty')->nullable();
            $table->enum('gets_applies_to', ['collections', 'products'])->default('products');
            $table->enum('discounted_value_type',['fixed', 'percentage', 'free'])->default('fixed');

         
       
            $table->enum('eligible_countries', ['all', 'specific'])->default('all');
            $table->enum('eligible_customers', ['all', 'specific'])->default('all');

       
            $table->boolean('exclude_shipping_over_an_amount')->default(false);
            $table->decimal('shipping_amount', 10, 2)->nullable();
   
            $table->integer('total_usage')->nullable();
            $table->boolean('once_per_customer')->nullable()->default(false);
          
            $table->boolean('active')->nullable();
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable();
            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable();
            $table->timestamps();
        });

        Schema::create('discount_collections', function (Blueprint $table) {
         
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade'); 
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade'); 
        });

        Schema::create('discount_products', function (Blueprint $table) {
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade'); 
            
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); 
            $table->json('inventories')->nullable();

        });

        Schema::create('discount_get_collections',function(Blueprint $table){
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');

        });
        Schema::create('discount_get_products',function(Blueprint $table){
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->json('inventories')->nullable();

        });

        Schema::create('discount_countries',function(Blueprint $table){
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');



        });    

        Schema::create('discount_customers',function(Blueprint $table){
            
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('discount_collections');
        Schema::dropIfExists('discount_products');
        Schema::dropIfExists('discount_get_collections');
        Schema::dropIfExists('discount_get_products');
        Schema::dropIfExists('discount_countries');
        Schema::dropIfExists('discount_customers');
        Schema::dropIfExists('discounts');
    }

};
