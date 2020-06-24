<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('details', function (Blueprint $table) {
                $table->integer('product_id')->unsigned()->nullable();
                $table->integer('quantity');
                $table->integer('capacity');
                $table->String('origin');
                $table->String('content');
                $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('table_details');
    }
}
