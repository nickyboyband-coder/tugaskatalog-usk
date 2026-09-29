<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'code' => 'P001',
            'name' => 'Kaos SMK Kreatif',
            'category' => 'Fashion',
            'price' => 75000,
            'stock' => 20,
            'description' => 'Kaos desain siswa SMK',
        ]);

        Product::create([
            'code' => 'P002',
            'name' => 'Totebag Edukasi',
            'category' => 'Aksesori',
            'price' => 45000,
            'stock' => 15,
            'description' => 'Totebag untuk kegiatan sekolah',
        ]);

        Product::create([
            'code' => 'P003',
            'name' => 'Notebook Pelajar',
            'category' => 'Alat Tulis',
            'price' => 25000,
            'stock' => 30,
            'description' => 'Notebook untuk catatan belajar',
        ]);

        Product::create([
            'code' => 'P004',
            'name' => 'Tumbler Sekolah',
            'category' => 'Aksesori',
            'price' => 65000,
            'stock' => 18,
            'description' => 'Botol minum reusable',
        ]);

        Product::create([
            'code' => 'P005',
            'name' => 'Stiker Kreatif',
            'category' => 'Aksesori',
            'price' => 15000,
            'stock' => 50,
            'description' => 'Paket stiker bertema edukasi',
        ]);

        Product::create([
            'code' => 'P006',
            'name' => 'Pin Ekskul',
            'category' => 'Aksesori',
            'price' => 10000,
            'stock' => 40,
            'description' => 'Pin kegiatan ekstrakurikuler',
        ]);

        Product::create([
            'code' => 'P007',
            'name' => 'Topi Sekolah',
            'category' => 'Fashion',
            'price' => 55000,
            'stock' => 12,
            'description' => 'Topi model kasual',
        ]);

        Product::create([
            'code' => 'P008',
            'name' => 'Mug Kelas',
            'category' => 'Perlengkapan',
            'price' => 35000,
            'stock' => 25,
            'description' => 'Mug souvenir kelas',
        ]);
    }
}