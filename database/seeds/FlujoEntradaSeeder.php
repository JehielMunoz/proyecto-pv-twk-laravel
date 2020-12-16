<?php

use Illuminate\Database\Seeder;

class FlujoEntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d H:i:s');
        DB::table('flujo_entrada')->insert([
            ['codigoProducto'=>2,'cantidad'=>150, 'numeroLote'=> 12305698,	'fechaVencimiento'=>"2020-08-15",'ubicacion'=>3,'idResponsable'=> 1,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>2,'cantidad'=>35, 'numeroLote'=> 44113256,	'fechaVencimiento'=>"2020-08-25",'ubicacion'=>6,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>3,'cantidad'=>500, 'numeroLote'=> 22512386,	'fechaVencimiento'=>null,		 'ubicacion'=>1,'idResponsable'=> 3,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>5,'cantidad'=>80, 'numeroLote'=> 2235287	,	'fechaVencimiento'=>null,		 'ubicacion'=>1,'idResponsable'=> 3,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>5,'cantidad'=>60, 'numeroLote'=> 225266568,	'fechaVencimiento'=>"2020-08-25",'ubicacion'=>7,'idResponsable'=> 3,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>2,'cantidad'=>150, 'numeroLote'=> 3444269,	'fechaVencimiento'=>"2020-08-27",'ubicacion'=>6,'idResponsable'=> 3,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>5,'cantidad'=>40, 'numeroLote'=>	44113282,	'fechaVencimiento'=>"2020-08-26",'ubicacion'=>3,'idResponsable'=> 1,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>1,'cantidad'=>100, 'numeroLote'=> 12305699,	'fechaVencimiento'=>"2020-08-15",'ubicacion'=>3,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>2,'cantidad'=>20, 'numeroLote'=> 44113273,	'fechaVencimiento'=>"2020-08-25",'ubicacion'=>6,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>3,'cantidad'=>500, 'numeroLote'=> 22512338,	'fechaVencimiento'=>null,		 'ubicacion'=>1,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>4,'cantidad'=>25, 'numeroLote'=> 2235295	,	'fechaVencimiento'=>null,		 'ubicacion'=>1,'idResponsable'=> 3,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>5,'cantidad'=>25, 'numeroLote'=> 225266576,	'fechaVencimiento'=>"2020-08-25",'ubicacion'=>7,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>2,'cantidad'=>25, 'numeroLote'=>	23444265,	'fechaVencimiento'=>"2020-08-27",'ubicacion'=>6,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1],
            ['codigoProducto'=>5,'cantidad'=>10, 'numeroLote'=>	44113277,	'fechaVencimiento'=>"2020-08-26",'ubicacion'=>3,'idResponsable'=> 2,'fechaOperacion'=>'2020-12-16 15:16:23','estado'=>1]
        ]);
    }
}
