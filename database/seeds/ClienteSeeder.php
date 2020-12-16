<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d H:i:s');
        DB::table('clientes')->insert([
            //nombreCliente,rutCliente,diaPago,idResponsable,creditoMaximo,creditoActual
            ['nombreCliente'=>'Juan Muñoz',     'rutCliente'=>'66.666.666-6','diaPago'=>20,'idResponsable'=>1,'creditoMaximo'=>130000,'creditoActual'=>100000],
            ['nombreCliente'=>'Maria Castillo', 'rutCliente'=>'77.777.777-7','diaPago'=>15,'idResponsable'=>2,'creditoMaximo'=>50000,'creditoActual'=>48500],
            ['nombreCliente'=>'Alberto Levi',   'rutCliente'=>'88.888.888-8','diaPago'=>22,'idResponsable'=>1,'creditoMaximo'=>200000,'creditoActual'=>35000],
            ['nombreCliente'=>'Pedro Casas',    'rutCliente'=>'99.999.999-9','diaPago'=>7,'idResponsable'=>2,'creditoMaximo'=>75000,'creditoActual'=>15500]
        ]);
    }
}
