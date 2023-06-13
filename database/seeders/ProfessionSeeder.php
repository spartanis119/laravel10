<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //usando directamente sql 
        /*   DB::insert('INSERT INTO professions(name) VALUES (:name)', 
        ['name' => 'Desarrollador Back-end']
    ); */

        //USANDO CONSTRUCTOR DE CONSULTAS SQL DE LARAVEL

      /*   DB::table('professions')->insert(['name' => 'Back-end Developer']);
        DB::table('professions')->insert(['name' => 'Front-end Developer']); */

        //USANDO EL ORM DE LARAVEL OSEA LOS MODELOS 

        Profession::create([
            'name' => 'Back-end Developer'
        ]);
        Profession::create([
            'name' => 'Front-end Developer'
        ]);

    }
}
