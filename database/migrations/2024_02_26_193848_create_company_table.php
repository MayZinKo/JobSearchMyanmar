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
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string("company_name",100);
            $table->string("image",100);
            $table->string("email",50);
            $table->string("phone",30);
           
            $table->string("description",100);
            $table->string("privilege",255);
            $table->integer('city_id')->unsigned();
            $table->integer('company_type_id')->unsigned();
        //    $table->foreign('city_id')->references('id')->on('city');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
