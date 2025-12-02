<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        


         DB::table('players')->insert([
            'name' => 'Bryan Mbeumo',
            'position' => 'Forward',
            'number' => 19,
            'nationality' => 'Cameroon',
            'appearances' => 12,
            'goals' => 6

            
        ]);

        DB::table('players')->insert([
            'name' => 'Casemiro',
            'position' => 'Midfielder',
            'number' => 18,
            'nationality' => 'Brazil',
            'appearances' => 10,
            'goals' => 3

            
        ]);

        DB::table('players')->insert([
            'name' => 'Bruno Fernandes (C)',
            'position' => 'Midfielder',
            'number' => 8,
            'nationality' => 'Portugal',
            'appearances' => 12,
            'goals' => 2

            
        ]);


         DB::table('players')->insert([
            'name' => 'Benjamin Sesko',
            'position' => 'Forward',
            'number' => 30,
            'nationality' => 'Slovenia',
            'appearances' => 12,
            'goals' => 2

            
        ]);


        DB::table('players')->insert([
            'name' => 'Harry Maguire',
            'position' => 'Defender',
            'number' => 5,
            'nationality' => 'England',
            'appearances' => 9,
            'goals' => 2

            
        ]);

        

        DB::table('players')->insert([
            'name' => 'Matthijs De Ligt',
            'position' => 'Defender',
            'number' => 4,
            'nationality' => 'Netherlands',
            'appearances' => 12,
            'goals' => 1

            
        ]);

        

        DB::table('players')->insert([
            'name' => 'Matheus Cunha',
            'position' => 'Forward',
            'number' => 10,
            'nationality' => 'Brazil',
            'appearances' => 11,
            'goals' => 1

            
        ]);

        

        DB::table('players')->insert([
            'name' => 'Amad Diallo',
            'position' => 'Midfielder',
            'number' => 16,
            'nationality' => 'Ivory Coast',
            'appearances' => 11,
            'goals' => 1

            
        ]);

        DB::table('players')->insert([
            'name' => 'Mason Mount',
            'position' => 'Forward',
            'number' => 7,
            'nationality' => 'England',
            'appearances' => 9,
            'goals' => 1

            
        ]);

        

        DB::table('players')->insert([
            'name' => 'Luke Shaw',
            'position' => 'Defender',
            'number' => 23,
            'nationality' => 'England',
            'appearances' => 11,
            'goals' => 0

            
        ]);

        DB::table('players')->insert([
            'name' => 'Lenny Yoro',
            'position' => 'Defender',
            'number' => 5,
            'nationality' => 'Cameroon',
            'appearances' => 11,
            'goals' => 0

            
        ]);

        DB::table('players')->insert([
            'name' => 'Patrick Dorgu',
            'position' => 'Defender',
            'number' => 13,
            'nationality' => 'Denmark',
            'appearances' => 11,
            'goals' => 0

            
        ]);

        

        DB::table('players')->insert([
            'name' => 'Manuel Ugarte',
            'position' => 'Midfielder',
            'number' => 25,
            'nationality' => 'Uruguay',
            'appearances' => 10,
            'goals' => 0

            
        ]);


        DB::table('players')->insert([
            'name' => 'Kobbie Mainoo',
            'position' => 'Midfielder',
            'number' => 37,
            'nationality' => 'England',
            'appearances' => 8,
            'goals' => 0

            
        ]);

        DB::table('players')->insert([
            'name' => 'Noussair Mazraoui',
            'position' => 'Defender',
            'number' => 3,
            'nationality' => 'Morocco',
            'appearances' => 5,
            'goals' => 0

            
        ]);

        

        



    }
}
