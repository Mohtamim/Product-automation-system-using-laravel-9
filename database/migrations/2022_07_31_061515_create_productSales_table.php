<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productSales', function (Blueprint $table) {
            $table->id();
            $table->string('selectCustomer');
            $table->string('selectProduct');
            $table->decimal('productPrice,5,2');
            $table->string('entryQuantity');
            $table->decimal('totalAmount,5,2');
            $table->timestamp('entryDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sales');
    }
};
