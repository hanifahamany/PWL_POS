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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1, 
                'barang_kode' => 'bg01', // Alat Tulis
                'barang_nama' => 'Pensil',
                'harga_beli' => 500,
                'harga_jual' => 1000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2, 
                'barang_kode' => 'bg03', // Buku
                'barang_nama' => 'Novel',
                'harga_beli' => 90000,
                'harga_jual' => 100000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3, // Kosmetik dan Skincare
                'barang_kode' => 'bg05',
                'barang_nama' => 'Serum',
                'harga_beli' => 45000,
                'harga_jual' => 50000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4, // Alat Olahraga
                'barang_kode' => 'bg07',
                'barang_nama' => 'Treadmill',
                'harga_beli' => 1750000,
                'harga_jual' => 2000000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5, // Alat Rumah Tangga
                'barang_kode' => 'bg09',
                'barang_nama' => 'Wajan Set',
                'harga_beli' => 95000,
                'harga_jual' => 100000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1, 
                'barang_kode' => 'bg02', // Alat Tulis
                'barang_nama' => 'Bolpoin',
                'harga_beli' => 500,
                'harga_jual' => 1000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2, 
                'barang_kode' => 'bg04', // Buku
                'barang_nama' => 'Kumpulan Cerpen',
                'harga_beli' => 50000,
                'harga_jual' => 65000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3, // Kosmetik dan Skincare
                'barang_kode' => 'bg06',
                'barang_nama' => 'Sunscreen',
                'harga_beli' => 95000,
                'harga_jual' => 100000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4, // Alat Olahraga
                'barang_kode' => 'bg08',
                'barang_nama' => 'Barbel Set',
                'harga_beli' => 1000000,
                'harga_jual' => 1500000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5, // Alat Rumah Tangga
                'barang_kode' => 'bg10',
                'barang_nama' => 'Pisau Set',
                'harga_beli' => 95000,
                'harga_jual' => 100000
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}