<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('naam_plaatser');
            $table->string('adres_plaatser');
            $table->string('postcode_plaatser');
            $table->string('gemeente_plaatser');
            $table->string('telefoonnummer_plaatser');
            $table->string('id_plaatser');
            $table->string('email_plaatser');
            $table->string('type_hulpvraag');
            $table->string('beschrijving_hulpvraag');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
