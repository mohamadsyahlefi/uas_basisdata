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
        Schema::create('tbl_kategori', function (Blueprint $table) {
            $table->id(); // Menggunakan id() sebagai pengganti INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('kategori', 200)->nullable(false);
            $table->string('slug', 100)->nullable(); 
            $table->enum('Aktif', ['Y', 'N'])->default('Y');
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at secara otomatis
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_kategori');
    }
};
