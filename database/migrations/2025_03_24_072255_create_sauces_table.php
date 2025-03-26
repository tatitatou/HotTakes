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
        Schema::create('sauces', function (Blueprint $table) {
            $table->id('sauceId');
            $table->unsignedBigInteger("userId")->nullable();
            $table->string("name");
            $table->string("manufacturer");
            $table->string("description");
            $table->string("mainPepper");
            $table->string("imageUrl");
            $table->integer("heat");
            $table->integer("likes")->default(0);
            $table->integer("dislikes")->default(0);
            // $table->json("usersLiked")->default(json_encode([]));
            // $table->json("usersDisliked")->default(json_encode([]));

            // Clé étrangère ( :p )
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sauces');
    }
};
