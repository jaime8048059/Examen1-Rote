<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoSeederr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('producto')->insert([
                [
                    'nombre'=>'Galaxy S21',
                    'precio'=>'799.99',
                    'marcas_id'=>'1',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'nombre'=>'iPhone s21',
                    'precio'=>'999.99',
                    'marcas_id'=>'2',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
                [
                    'nombre'=>'Redmi  Note 11',
                    'precio'=>'199.99',
                    'marcas_id'=>'3',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]
                ]);
    }
}
