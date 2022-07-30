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
        Schema::create('admini_cost_entries', function (Blueprint $table) {
            $table->id();
            $table->foreign('expenseHeadName')->references('id')->on('admin_cost_types')->onDelete('cascade');
            $table->decimal('expenseAmount', 9, 3);//ekhane bigInteger/float use hobe naki decimal correction me
            $table->timestamps('expenseDate');
            $table->string('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admini_cost_entries');
    }
};
