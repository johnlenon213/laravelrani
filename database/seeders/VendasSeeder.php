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




it config --global user.email "mariac4682@gmail.com""
 1756  git config --global user.email "mariac4682@gmail.com"
 1757  git config --global user.name "Maria conceição"
 1758  git config --global user.email "mariac4682@gmail,com"
 1759  git log -3
 1760  git add --all
 1761  git --message "Criação do repositorio"
 1762  git commit --message "Criação do repositorio"
 1763  git add --all
 1764  git push
