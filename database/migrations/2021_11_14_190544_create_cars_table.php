<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            // $table->increments('car_id');
            $table->string('car_name')->primary();
            $table->string ('collection_from');
            $table->string('year');
            $table->string('color');
            //$table->integer('index');
            $table->string('image_path_car');
            $table->timestamps();
        });
    }
        // Schema::table('cars', function($table) {
        //     $table->foreign('coll_id')->references('collection_id')->on('collection');
        // });


        // Schema::table('cars', function ($table) {
        //     $table->integer('car_id')->unsigned();

        //     $table->foreign('car_id')->references('collection_id')->on('collection');

        //     $table->foreign('car_id')
        //         ->references('collection_id')->on('collection')
        //         ->onDelete('cascade');
        // });


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
