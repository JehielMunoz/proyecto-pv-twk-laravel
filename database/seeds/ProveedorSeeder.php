<?php

use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            ['razonSocial'=>'Razon#1','rut'=>'11.111.111-1','telefono'=>'56911223344','correo'=>'razon1@gmail.com'],
            ['razonSocial'=>'Razon#2','rut'=>'22.222.222-2','telefono'=>'56911223345','correo'=>'razon2@gmail.com'],
            ['razonSocial'=>'Razon#3','rut'=>'33.333.333-3','telefono'=>'56911223344','correo'=>'razon3@gmail.com']
        ]);
    }
}
