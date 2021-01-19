<?php

namespace Database\Seeders;

use app\models\cli;
use Illuminate\Database\Seeder;

class CliSeeder extends Seeder
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
        cli::create([
        'cliente'=>'cliente'
        ]);
    }
}
