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
        Schema::create('tbl_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('slug', 200);
            $table->unsignedBigInteger('user_id');
            $table->text('content');
            $table->string('image', 100)->default('Noimage.jpg');
            $table->integer('hits')->default(0);
            $table->enum('aktif', ['Y', 'N'])->default('Y');
            $table->enum('status', ['publish', 'draft'])->default('publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_posts');
    }
};
