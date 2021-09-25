<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmes', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('opis');
            $table->string('pozicija');
            //$table->integer('grad_id')->nullable()->integer()->index();
            //$table->foreign('grad_id')->references('id')->on('grad');
           
        });

        // Schema::table('firme', function(Blueprint $table) {
        //     $table->foreign('grad_id')->references('id')->on('grad');
        // });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firmes');
    }
}
