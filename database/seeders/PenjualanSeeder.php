<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'pembeli' => 'Ali Akbar',
                'penjualan_kode' => 'P001',
                'penjualan_tanggal' => '2024-09-05'
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Siti Aminah',
                'penjualan_kode' => 'P002',
                'penjualan_tanggal' => '2024-09-06'
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Ahmad Faisal',
                'penjualan_kode' => 'P003',
                'penjualan_tanggal' => '2024-09-06'
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Dewi Kartika',
                'penjualan_kode' => 'P004',
                'penjualan_tanggal' => '2024-09-07'
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'P005',
                'penjualan_tanggal' => '2024-09-07'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Aisyah Rahman',
                'penjualan_kode' => 'P006',
                'penjualan_tanggal' => '2024-09-08'
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Fajar Pratama',
                'penjualan_kode' => 'P007',
                'penjualan_tanggal' => '2024-09-08'
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Nurul Hidayati',
                'penjualan_kode' => 'P008',
                'penjualan_tanggal' => '2024-09-09'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Hasan Basri',
                'penjualan_kode' => 'P009',
                'penjualan_tanggal' => '2024-09-09'
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Indah Wulandari',
                'penjualan_kode' => 'P010',
                'penjualan_tanggal' => '2024-09-10'
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
