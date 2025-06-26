<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('merek');
            $table->enum('kategori', ['Gaming', 'Ultrabook', 'Workstation']);
            $table->enum('os', ['Windows', 'MacOS', 'Linux']);
            $table->enum('ram', ['4GB', '8GB', '16GB']);
            $table->string('gambar')->nullable();
            $table->string('layar');
            $table->string('prosesor');
            $table->string('baterai');
            $table->enum('storage', ['256GB', '512GB', '1TB']);
            $table->decimal('harga_sewa', 10, 3);
            $table->enum('status', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptop');
    }
};
