<?php

use Illuminate\Database\Seeder;

class FlujoSalidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d H:i:s');
        DB::table('flujo_salida')->insert([
        ['codigoProducto'=>1,'cantidad'=>400,'idTipoEgreso'=>4, 'idResponsable'=>1, 'fechaOperacion'=>$current_timestamp],
        ['codigoProducto'=>2,'cantidad'=>35,'idTipoEgreso'=> 5, 'idResponsable'=>2, 'fechaOperacion'=>$current_timestamp],
        ['codigoProducto'=>3,'cantidad'=>1350,'idTipoEgreso'=>4, 'idResponsable'=>1, 'fechaOperacion'=>$current_timestamp],
        ['codigoProducto'=>5,'cantidad'=>60,'idTipoEgreso'=> 4, 'idResponsable'=>2, 'fechaOperacion'=>$current_timestamp],
        ['codigoProducto'=>2,'cantidad'=>85,'idTipoEgreso'=> 4, 'idResponsable'=>1, 'fechaOperacion'=>$current_timestamp],
        ['codigoProducto'=>5,'cantidad'=>50,'idTipoEgreso'=> 4, 'idResponsable'=>2, 'fechaOperacion'=>$current_timestamp]
        ]);
    }
}
