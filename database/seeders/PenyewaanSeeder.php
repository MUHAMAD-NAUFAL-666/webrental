<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penyewaan;

class PenyewaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyewaan::create([
            'id' => 3,
            'nama' => 'iPhone 13 Pro',
            'merek' => 'Apple',
            'harga_sewa' => 1500000,
            'tanggal_sewa' => now(),
            'status' => 'sewa'
        ]);

        

       
    }
}
