<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('awb');
            $table->string('flight');
            $table->date('track_date');
            $table->integer('kolly');
            $table->integer('weight');
            $table->string('btb');
            $table->string('shipper');
            $table->string('remarks');
            $table->string('flag');
            $table->timestamps();
            $table->unique(['awb']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trackings');
    }
}
