<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_published');
            $table->string('type');
            $table->string('file_size');
            $table->string('format')->unique();
            $table->string('file_location');

            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->foreignId('resource_category_id')->constrained();

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
        Schema::dropIfExists('resources');
    }
};
