<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('sale_serial');
            $table->integer('product_id');
            $table->integer('client_id');
            $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('client_id')->references('id')->on('clients');
            $table->decimal('sale_cost');
            $table->decimal('price');
            $table->integer('sale_qty');
            $table->decimal('sale_total');
            $table->decimal('total_cost');
            $table->date('sale_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
