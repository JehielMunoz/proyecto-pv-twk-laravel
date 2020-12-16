<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Stock')->insert([
            ['codigoProducto'=>1,'cantidadTotal'=>800,'stockCritico'=>150],
            ['codigoProducto'=>2,'cantidadTotal'=>120,'stockCritico'=>50],
            ['codigoProducto'=>3,'cantidadTotal'=>1650,'stockCritico'=>500],
            ['codigoProducto'=>4,'cantidadTotal'=>100,'stockCritico'=>10],
            ['codigoProducto'=>5,'cantidadTotal'=>45,'stockCritico'=>50]
        ]);
    }
}
