<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //USANDO EL CONTRUCTOR DE CONSULTAS SQL DE LARAVEL PARA AGREGAR LA PROFESION 
        

        User::create([
            'name' => 'Daniel Camargo',
            'email' => 'd@gmail.com',
            'password'=> bcrypt('123'),
            'profession_id' => Profession::whereName('Back-end Developer')->value('id') 
        ]);
    }
}
