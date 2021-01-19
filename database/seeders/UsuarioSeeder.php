<?php

namespace Database\Seeders;

use app\models\usuario;
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
        //
        User::all()
        usuario::create([
        	'login'=>'john',
        	'senha'=>'1234',
        	'cargo'=>'fucionario',
        	'user_id'=>1
        ]);
    }
}
