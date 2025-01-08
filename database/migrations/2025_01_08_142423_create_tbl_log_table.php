<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_log', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->unsignedBigInteger('user');
            $table->timestamp('waktu')->useCurrent();
            $table->string('title_lama')->nullable();
            $table->string('title_baru')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_log');
    }
};
