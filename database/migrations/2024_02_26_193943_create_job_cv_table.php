<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_cv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned();
            //$table->foreign('job_id')->references('id')->on('job');

            $table->integer('cv_id')->unsigned();
            //$table->foreign('cv_id')->references('id')->on('cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_cv');
    }
};
