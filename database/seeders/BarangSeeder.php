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
                'kategori_id' => 1,
                'barang_kode' => 'B001',
                'barang_nama' => 'Laptop Lenovo',
                'harga_beli' => 7000000,
                'harga_jual' => 8500000
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B002',
                'barang_nama' => 'TV Samsung 40"',
                'harga_beli' => 4000000,
                'harga_jual' => 5000000
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B003',
                'barang_nama' => 'Kulkas LG',
                'harga_beli' => 2500000,
                'harga_jual' => 3000000
            ],
            
            // Barang untuk kategori Pakaian (kategori_id = 2)
            [
                'kategori_id' => 2,
                'barang_kode' => 'B004',
                'barang_nama' => 'Kemeja Pria',
                'harga_beli' => 150000,
                'harga_jual' => 200000
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B005',
                'barang_nama' => 'Celana Jeans Wanita',
                'harga_beli' => 250000,
                'harga_jual' => 350000
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B006',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 180000,
                'harga_jual' => 250000
            ],
            
            // Barang untuk kategori Makanan & Minuman (kategori_id = 3)
            [
                'kategori_id' => 3,
                'barang_kode' => 'B007',
                'barang_nama' => 'Mie Instan Goreng',
                'harga_beli' => 2000,
                'harga_jual' => 3000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B008',
                'barang_nama' => 'Minuman Bersoda 500ml',
                'harga_beli' => 5000,
                'harga_jual' => 7000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B009',
                'barang_nama' => 'Biskuit Coklat',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            
            // Barang untuk kategori Peralatan Rumah (kategori_id = 4)
            [
                'kategori_id' => 4,
                'barang_kode' => 'B010',
                'barang_nama' => 'Mesin Cuci Panasonic',
                'harga_beli' => 3500000,
                'harga_jual' => 4200000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B011',
                'barang_nama' => 'Setrika Philips',
                'harga_beli' => 300000,
                'harga_jual' => 400000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B012',
                'barang_nama' => 'Vacuum Cleaner Samsung',
                'harga_beli' => 700000,
                'harga_jual' => 850000
            ],
            
            // Barang untuk kategori Buku & Alat Tulis (kategori_id = 5)
            [
                'kategori_id' => 5,
                'barang_kode' => 'B013',
                'barang_nama' => 'Buku Tulis A4',
                'harga_beli' => 5000,
                'harga_jual' => 7000
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B014',
                'barang_nama' => 'Pulpen Biru',
                'harga_beli' => 2000,
                'harga_jual' => 3000
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B015',
                'barang_nama' => 'Penghapus Pensil',
                'harga_beli' => 1000,
                'harga_jual' => 1500
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
