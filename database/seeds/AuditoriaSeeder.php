<?php

use Illuminate\Database\Seeder;

class AuditoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d H:i:s');
        DB::table('auditorias')->insert([
        ['codigoProducto'=>1,'totalDia'=>1000,  'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-17"],
        ['codigoProducto'=>2,'totalDia'=>200,   'nota'=>"Menor al Total",	'fechaOperacion'=>"2020-07-17"],
        ['codigoProducto'=>3,'totalDia'=>2000,  'nota'=>"Menor al Total",	'fechaOperacion'=>"2020-07-17"],
        ['codigoProducto'=>4,'totalDia'=>50,	'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-17"],
        ['codigoProducto'=>5,'totalDia'=>150,	'nota'=>"Mayor al Total",	'fechaOperacion'=>"2020-07-17"],
        ['codigoProducto'=>1,'totalDia'=>1000,  'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-22"],
        ['codigoProducto'=>2,'totalDia'=>200,	'nota'=>"Menor al Total",	'fechaOperacion'=>"2020-07-22"],
        ['codigoProducto'=>3,'totalDia'=>2000,  'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-22"],
        ['codigoProducto'=>4,'totalDia'=>50,	'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-22"],
        ['codigoProducto'=>5,'totalDia'=>150,	'nota'=>"Mayor al Total",	'fechaOperacion'=>"2020-07-22"],
        ['codigoProducto'=>1,'totalDia'=>800,	'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-23"],
        ['codigoProducto'=>2,'totalDia'=>120,	'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-23"],
        ['codigoProducto'=>3,'totalDia'=>1650,  'nota'=>"Menor al Total",	'fechaOperacion'=>"2020-07-23"],
        ['codigoProducto'=>4,'totalDia'=>100,	'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-23"],
        ['codigoProducto'=>5,'totalDia'=>100,	'nota'=>"Calculo Coincide",	'fechaOperacion'=>"2020-07-23"]
        ]);
    }
}
