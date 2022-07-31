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
        Schema::create('production_manages', function (Blueprint $table) {
            $table->id();
            $table->timestamp('entryDate');
            $table->string('productionNo');
            $table->date('expiryDate');
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
