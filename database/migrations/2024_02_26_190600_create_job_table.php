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
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string("job_title",100);
            $table->string("job_requirement",255);
            $table->string("privilege",255);
            $table->string("address",100);

            $table->integer('category_id')->unsigned();
          //  $table->foreign('category_id')->references('id')->on('category');

            $table->integer('company_id')->unsigned();
         //   $table->foreign('company_id')->references('id')->on('company');

            $table->integer('job_type_id')->unsigned();
         //   $table->foreign('job_type_id')->references('id')->on('job_type');
            $table->integer('city_id')->unsigned();

            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
