<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('email');
            //$table->integer('firma_id')->nullable()->unsigned()->index();
            //$table->foreign('firma_id')->references('id')->on('firme');
           
        });

        // Schema::table('kandidat', function(Blueprint $table) {
        //     $table->foreign('firma_id')->references('id')->on('firme');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kandidats');
    }
}
