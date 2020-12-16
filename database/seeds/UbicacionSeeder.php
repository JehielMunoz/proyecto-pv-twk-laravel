<?php

use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ubicaciones')->insert([
            ['codigo'=>'A1-01','tipo'=> 13,'descripcion'=> 'Zona Seca','estado'=>1],
            ['codigo'=>'A1-02','tipo'=> 13,'descripcion'=> 'Zona Seca','estado'=>1],
            ['codigo'=>'A1-03','tipo'=> 13,'descripcion'=> 'Zona Seca','estado'=>1],
            ['codigo'=>'A1-04','tipo'=> 14,'descripcion'=> 'Zona Humeda','estado'=>0],
            ['codigo'=>'A2-01','tipo'=> 14,'descripcion'=> 'Zona Humeda','estado'=>0],
            ['codigo'=>'A2-02','tipo'=> 14,'descripcion'=> 'Zona Humeda','estado'=>1],
            ['codigo'=>'A2-03','tipo'=> 15,'descripcion'=> 'Zona Fragil','estado'=>0],
            ['codigo'=>'A2-04','tipo'=> 15,'descripcion'=> 'Zona Fragil','estado'=>0]
        ]);
    }
}
