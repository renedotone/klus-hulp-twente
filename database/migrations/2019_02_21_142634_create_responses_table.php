<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('naam_plaatser_response');
            $table->string('id_plaatser_response');
            $table->string('naam_plaatser_hulpvraag');
            $table->string('id_plaatser_hulpvraag');
            $table->string('bericht_plaatser_response');
            $table->unsignedInteger('hulpvraag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
