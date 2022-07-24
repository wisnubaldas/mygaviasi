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
            $table->string('flight')->nullable();
            $table->date('track_date')->nullable();
            $table->integer('kolly');
            $table->integer('weight');
            $table->string('btb');
            $table->string('shipper');
            $table->string('remarks');
            $table->string('flag')->nullable();
            $table->string('destination')->nullable();
            $table->timestamps();
            // $table->unique(['awb']);
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
