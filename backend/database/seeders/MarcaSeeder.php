<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a la tabla
        DB::table('marcas')->insert([
                [
                    'nombre'=>'Samsung',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'nombre'=>'Apple',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'nombre'=>'Xiaomi',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]
                ]);
    }
}
