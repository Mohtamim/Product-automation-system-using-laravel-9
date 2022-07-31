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
        Schema::create('productionManages', function (Blueprint $table) {
            $table->id();
            $table->timestamps('entryDate');
            $table->string('productionNo');
            $table->timestamps('expiryDate');
            $table->string('selectProductName');
            $table->string('uniteType');
            $table->decimal('productionQuantity',5,2); 
            $table->string('selectedMaterials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_manages');
    }
};
