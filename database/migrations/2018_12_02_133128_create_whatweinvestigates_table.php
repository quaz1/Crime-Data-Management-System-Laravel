<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatweinvestigatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whatweinvestigates', function (Blueprint $table) {
          $table->increments('id');
          $table->string('whatweinvestigate_title');
          $table->text('whatweinvestigate_body');
          $table->string('whatweinvestigate_image');
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
        Schema::dropIfExists('whatweinvestigates');
    }
}
