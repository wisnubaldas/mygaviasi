<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('caption');
            $table->text('description');
            $table->string('bg');
            $table->string('btn_title');
            $table->string('btn_link');
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
        Schema::dropIfExists('landing_slides');
    }
}
