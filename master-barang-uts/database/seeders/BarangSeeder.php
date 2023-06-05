<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kodebarang' => '01',
                'namabarang' => 'Laptop',
                'hargabarang' => '5000000',
                'deskripsibarang' => 'Barang terjamin bagus',
                'satuan_id' => 1,
            ],
            [
                'kodebarang' => '02',
                'namabarang' => 'Hp',
                'hargabarang' => '25000000',
                'deskripsibarang' => 'Kualitas spek dewa',
                'satuan_id' => 2,
            ],
            [
                'kodebarang' => '03',
                'namabarang' => 'Kipas',
                'hargabarang' => '500000',
                'deskripsibarang' => 'Barang Top',
                'satuan_id' => 3,
            ],
        ]);
    }
}
