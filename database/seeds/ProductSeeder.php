<?php
namespace Datababase\Seeders;
use Illuminate\Database\Seeder;
use DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,25) as $index){
            $productos[] = [
                'Nombre' => 'NombreTest' + $index,
                'Marca' => 'MarcaTest' + $index,
                'Precio' => rand(1000,10000,500),
                'Cantidad' => rand(1,30),
            ];
        }
        DB::table('productos')->insert($productos);
    }
}
