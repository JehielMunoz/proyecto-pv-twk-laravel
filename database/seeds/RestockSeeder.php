<?php

use Illuminate\Database\Seeder;

class RestockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restocks')->insert([
        ['idResponsable'=>1,'fechaOperacion'=>'2020-12-15 20:16:24','totalOperacion'=>500000],
        ['idResponsable'=>1,'fechaOperacion'=>'2020-12-16 15:16:23','totalOperacion'=>310000]
        ]);
    }
}
