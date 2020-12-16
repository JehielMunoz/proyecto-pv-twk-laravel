<?php

use Illuminate\Database\Seeder;

class DescuentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d H:i:s');
        DB::table('descuentos')->insert([
            ['codigoDescuento'=>'DIC.NAV','descripcion'=>'Descuento navideño', 'rebaja'=>25,'fechaInicio'=>'2020-12-20 18:00:00','fechaFin'=>'2020-12-28 18:00:00'],
            ['codigoDescuento'=>'DIC.AN', 'descripcion'=>'Descuento año nuevo','rebaja'=>35,'fechaInicio'=>'2020-12-28 10:00:00','fechaFin'=>'2021-01-3 18:00:00']
        ]);
    }
}
