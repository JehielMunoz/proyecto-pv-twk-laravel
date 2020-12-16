<?php

use Illuminate\Database\Seeder;

class ProveedorProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedor_producto')->insert([
            ['codigoProducto'=>1 ,'idProveedor'=>1],
            ['codigoProducto'=>2 ,'idProveedor'=>2],
            ['codigoProducto'=>3 ,'idProveedor'=>3],
            ['codigoProducto'=>4 ,'idProveedor'=>3],
            ['codigoProducto'=>5 ,'idProveedor'=>2],
            ['codigoProducto'=>6 ,'idProveedor'=>2]
        ]);
    }
}
