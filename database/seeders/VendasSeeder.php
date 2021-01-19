<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\venda;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = User::all();
        foreach ($users as $user) {
         vendas::factory(5)->create([
            'user_id' =>$user->id
        ]);
        }
    }
}





 //git config --global user.name "Maria conceição"
 //git config --global user.email "mariac4682@gmail,com"
 //git add --all
 //git commit --message "Criação do repositorio"
 //git add --all
 //git push
