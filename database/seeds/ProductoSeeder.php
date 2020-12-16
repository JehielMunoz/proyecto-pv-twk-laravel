<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d H:i:s');
        DB::table('productos')->insert([
        ['nombre'=>'Papas',             'idCategoria'=>1,'idMedida'=>7,'idMarca'=>10,'idResponsableCreacion'=>1,'descripcion'=>'Mantener Seco','fechaCreacion'=> $current_timestamp],
        ['nombre'=>'Jugo Naranja',      'idCategoria'=>2,'idMedida'=>8,'idMarca'=>11,'idResponsableCreacion'=>2,'descripcion'=>'Mantener Seco','fechaCreacion'=>$current_timestamp],
        ['nombre'=>'Clavos',            'idCategoria'=>3,'idMedida'=>7,'idMarca'=>12,'idResponsableCreacion'=>1,'descripcion'=>'Manejar con Cuidado','fechaCreacion'=>$current_timestamp],
        ['nombre'=>'Alambre recocido',  'idCategoria'=>3,'idMedida'=>9,'idMarca'=>12,'idResponsableCreacion'=>1,'descripcion'=>'Manejar con Cuidado','fechaCreacion'=>$current_timestamp],
        ['nombre'=>'Jugo Frutilla',     'idCategoria'=>2,'idMedida'=>8,'idMarca'=>11,'idResponsableCreacion'=>2,'descripcion'=>'Mantener Seco','fechaCreacion'=>$current_timestamp],
        ['nombre'=>'Jugo Melon',        'idCategoria'=>2,'idMedida'=>8,'idMarca'=>11,'idResponsableCreacion'=>2,'descripcion'=>'Mantener Seco','fechaCreacion'=>$current_timestamp]
        ]);
    }
}
