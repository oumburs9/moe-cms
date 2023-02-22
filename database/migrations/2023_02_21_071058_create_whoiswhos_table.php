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
        Schema::create('whoiswhos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('telegram');
            $table->string('email')->unique();
            $table->bigInteger('assigned_user');
            $table->boolean('is_published');

            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('language_id')->constrained();
            
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
        Schema::dropIfExists('whoiswhos');
    }
};
