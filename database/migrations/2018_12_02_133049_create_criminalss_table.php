<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criminalss', function (Blueprint $table) {
          $table->increments('id');
          $table->string('criminals_name');
          $table->string('criminals_age');
          $table->string('criminals_dob');
          $table->string('criminals_gender');
        //  $table->string('criminals_age');
          $table->string('criminals_nid');
          $table->text('criminals_crime');
          $table->string('criminals_blood');
          $table->text('criminals_status');
          $table->string('criminals_regno');
          $table->string('criminals_regdate');
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
        Schema::dropIfExists('criminalss');
    }
}
