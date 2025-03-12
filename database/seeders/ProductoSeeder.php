<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombre' => '',
            'descripcion' => '',
            'precio' => null,
            'stock' => null,
            'imagen' => '',
            'categoria_id' => null,
        ]);
    }
}
