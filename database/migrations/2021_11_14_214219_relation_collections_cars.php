<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationCollectionsCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('collection_from')
                ->references('collection_name')->on('collection')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // Schema::table('cars', function ($table) {
        //         $table->integer('car_id')->unsigned();
    
        //         $table->foreign('car_id')->references('collection_id')->on('collection');
    
        //         $table->foreign('car_id')
        //             ->references('collection_id')->on('collection')
        //             ->onDelete('cascade');
        //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
