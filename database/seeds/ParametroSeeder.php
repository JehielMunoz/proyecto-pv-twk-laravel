<?php

use Illuminate\Database\Seeder;

class ParametroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parametros')->insert([
            ['codigo' =>'CA.1','tipo'=>'CATEGORIA','descripcion'=>'Vegetales'],
            ['codigo' =>'CA.2','tipo'=>'CATEGORIA','descripcion'=>'Bebidas'],
            ['codigo' =>'CA.3','tipo'=>'CATEGORIA','descripcion'=>'Ferreteria'],
            ['codigo' =>'EG.1','tipo'=>'EGRESO','descripcion'=>'Merma'],
            ['codigo' =>'EG.2','tipo'=>'EGRESO','descripcion'=>'Vencimiento'],
            ['codigo' =>'EG.3','tipo'=>'EGRESO','descripcion'=>'Auditorias'],
            ['codigo' =>'ME.1','tipo'=>'MEDIDA','descripcion'=>'Kilo'],
            ['codigo' =>'ME.2','tipo'=>'MEDIDA','descripcion'=>'Litro'],
            ['codigo' =>'ME.3','tipo'=>'MEDIDA','descripcion'=>'Metro'],
            ['codigo' =>'MA.1','tipo'=>'MARCA','descripcion'=>'Sin Marca'],
            ['codigo' =>'MA.2','tipo'=>'MARCA','descripcion'=>'Zuko'],
            ['codigo' =>'MA.3','tipo'=>'MARCA','descripcion'=>'Inchalam'],
            ['codigo' =>'UB.1','tipo'=>'UBICACION','descripcion'=>'Zona Seca'],
            ['codigo' =>'UB.2','tipo'=>'UBICACION','descripcion'=>'Zona Humeda'],
            ['codigo' =>'UB.3','tipo'=>'UBICACION','descripcion'=>'Zona Fragil']
        ]);
    }
}
