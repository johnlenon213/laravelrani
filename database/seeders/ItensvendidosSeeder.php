<?php

namespace Database\Seeders;

use app\models\itensvendidos;
use Illuminate\Database\Seeder;

class ItensvendidosSeeder extends Seeder
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
    	Itensvendidos::create([
    		'itensvendidos'=>1
      ]);
    }
}
