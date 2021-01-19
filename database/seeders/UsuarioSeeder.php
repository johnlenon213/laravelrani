<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\venda;
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
        $users = User::all();
        foreach ($users as $user) {
         usuario::factory(5)->create([
            'user_id' =>$user->id
        ]);
    }
}
