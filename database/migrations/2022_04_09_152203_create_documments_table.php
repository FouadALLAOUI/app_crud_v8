<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocummentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documments', function (Blueprint $table) {
            $table->id();
            $table->string('propr'); //proprietaire
            $table->string('intitule'); 
            $table->string('auteur');
            $table->string('description')->nullable();
            $table->string('type_document');
            $table->boolean('visibility');
            $table->boolean('archive');
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
        Schema::dropIfExists('documments');
    }
}
