<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaSpoljnih extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('firmes', function(Blueprint $table) {
            $table->unsignedBigInteger('grad_id');
            $table->foreign('grad_id')->references('id')->on('grads');
        });

        Schema::table('kandidats', function(Blueprint $table) {
           $table->unsignedBigInteger('firma_id');
           $table->foreign('firma_id')->references('id')->on('firmes');
       });    
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
