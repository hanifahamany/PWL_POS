<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'alt',
                'kategori_nama' => 'Alat Tulis'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'buk',
                'kategori_nama' => 'Buku'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'cos',
                'kategori_nama' => 'Kosmetik dan Skincare'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'dym',
                'kategori_nama' => 'Alat Olahraga'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'eho',
                'kategori_nama' => 'Alat Rumah Tangga'
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}