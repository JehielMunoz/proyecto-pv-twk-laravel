<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            ['nombre'=>'Eduardo Ortiz','rut'=>'33.333.333-3','telefono'=>'91060502','correo'=>'eortiz@mail.com','cargo'=>'Bodeguero'],
            ['nombre'=>'Nicolas Montolla','rut'=>'22.222.222-2','telefono'=>'91060503','correo'=>'nmontolla@mail.com','cargo'=>'Bodeguero'],
            ['nombre'=>'Mario Perez','rut'=>'44.444.444-4','telefono'=>'91060504','correo'=>'mperez@mail.com','cargo'=>'Bodeguero'],
            ['nombre'=>'Pedro Rojo','rut'=>'55.555.555-5','telefono'=>'91010203','correo'=>'projo@mail.com','cargo'=>'Administrador']
        ]);
    }
}
