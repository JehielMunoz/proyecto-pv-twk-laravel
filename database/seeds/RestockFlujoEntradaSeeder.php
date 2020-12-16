<?php

use Illuminate\Database\Seeder;

class RestockFlujoEntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maxIteration = DB::table('flujo_entrada')->max('id');//select(DB::raw('select max(id)'));
        $restockFlujoEntrada=[];
        foreach (range(1,$maxIteration) as $index){
            $idEntrada = DB::table('flujo_entrada')
                                ->where('id','=',$index)->value('id');
            $fechaOperacion= DB::table('flujo_entrada')
                                ->where('id','=',$index)->value('fechaOperacion');
            $fechaOperacion= substr($fechaOperacion, 0, 13);
            //echo "convert ", gettype($fechaOperacion), $fechaOperacion;
            $idRestock = DB::table('restocks')
                                ->where('fechaOperacion','like',$fechaOperacion.'%')->value('id');
            $restockFlujoEntrada[] = [
                'idRestock' => $idRestock,
                'idEntrada' => $idEntrada
            ];
        }
        DB::table('restock_flujoentrada')->insert($restockFlujoEntrada);
    }
}
