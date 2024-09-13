<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 8500000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 5000000,
                'jumlah' => 2
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 3000000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 200000,
                'jumlah' => 3
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 350000,
                'jumlah' => 2
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 250000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 3000,
                'jumlah' => 10
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 7000,
                'jumlah' => 5
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 20000,
                'jumlah' => 4
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 4200000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 11,
                'harga' => 400000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 12,
                'harga' => 850000,
                'jumlah' => 2
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 13,
                'harga' => 7000,
                'jumlah' => 10
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 14,
                'harga' => 3000,
                'jumlah' => 15
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 15,
                'harga' => 1500,
                'jumlah' => 20
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 1,
                'harga' => 8500000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 5000000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 3,
                'harga' => 3000000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => 200000,
                'jumlah' => 3
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 5,
                'harga' => 350000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 6,
                'harga' => 250000,
                'jumlah' => 2
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 7,
                'harga' => 3000,
                'jumlah' => 10
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => 7000,
                'jumlah' => 5
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 9,
                'harga' => 20000,
                'jumlah' => 2
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 10,
                'harga' => 4200000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 11,
                'harga' => 400000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 12,
                'harga' => 850000,
                'jumlah' => 1
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 13,
                'harga' => 7000,
                'jumlah' => 20
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 14,
                'harga' => 3000,
                'jumlah' => 30
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 15,
                'harga' => 1500,
                'jumlah' => 25
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
