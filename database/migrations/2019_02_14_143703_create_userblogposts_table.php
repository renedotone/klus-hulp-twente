<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserblogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userblogposts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('naam_plaatser_blog');
            $table->string('id_plaatser_blog');
            $table->string('type_hulpvraag_blog');
            $table->string('beschrijving_hulpvraag_blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userblogposts');
    }
}
