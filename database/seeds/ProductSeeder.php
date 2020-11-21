<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $productos = [];

        foreach (range(1,25) as $index){
            $productos[] = [
                'Nombre' => "Producto $index ".$faker->text(10)." ".$faker->numberBetween(20,30),
                'Marca' => rand(1,10),
                'Precio' => rand(1000,10000),
                'Cantidad' => rand(1,30),
            ];
        }
        DB::table('productos')->insert($productos);
    }
}
