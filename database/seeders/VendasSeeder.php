<?php

namespace Database\Seeders;

use app\models\venda;
use app\models\user;
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
        User::all()
         vendas::create([
        'itens'=>'itens',
        'datavendas'=>'10/01/20021',
		'preçovendas'=>'11;00',
		'desconto'=>'1;00',
		'preço total'=>'10;00'
 ]);
    }
}





 //git config --global user.name "Maria conceição"
 //git config --global user.email "mariac4682@gmail,com"
 //git add --all
 //git commit --message "Criação do repositorio"
 //git add --all
 //git push
