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
        Schema::create('desk_contents', function (Blueprint $table) {
            $table->id();
            $table->string('body');
            $table->string('title');
            $table->boolean('is_published');
            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->foreignId('page_id')->constrained();
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
        Schema::dropIfExists('desk_contents');
    }
};
