<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'S001',
                'supplier_nama' => 'PT. Elektronik Jaya',
                'supplier_alamat' => 'Jl. Merdeka No. 123, Jakarta'
            ],
            [
                'supplier_kode' => 'S002',
                'supplier_nama' => 'UD. Pakaian Sejahtera',
                'supplier_alamat' => 'Jl. Sudirman No. 45, Bandung'
            ],
            [
                'supplier_kode' => 'S003',
                'supplier_nama' => 'CV. Makanan Nusantara',
                'supplier_alamat' => 'Jl. Diponegoro No. 67, Surabaya'
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
