<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@kozpont.hu',
                'password' => Hash::make('TitokTitok'),
                'vezeteknev' => 'Központ',
                'keresztnev' => 'Admin',
                'iskola_id' => 1,
                'munkakor_id' => 5,
                'jog_admin' => true,
                'jog_ertekeles' => true,
                'jog_iras' => true
            
    ]);


            /* [
                'name' => 'főigazgató',
                'email' => 'admin@kozpont.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Központ',
                'keresztnev' => 'Főigazgató',
                'iskola_id' => 1,
                'munkakor_id' => 4,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'dolgozó',
                'email' => 'dolgozo@kozpont.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Központ',
                'keresztnev' => 'Dolgozó',
                'iskola_id' => 1,
                'munkakor_id' => 5,
                'jog_admin' => false,
                'jog_ertekeles' => false,
                'jog_iras' => true
            ],
            [
                'name' => 'admin - iskola1',
                'email' => 'admin@iskola1.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola1',
                'keresztnev' => 'Admin',
                'iskola_id' => 2,
                'munkakor_id' => 5,
                'jog_admin' => true,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'dolgozó - iskola1',
                'email' => 'dolgozo@iskola1.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola1',
                'keresztnev' => 'Dolgozó',
                'iskola_id' => 2,
                'munkakor_id' => 1,
                'jog_admin' => false,
                'jog_ertekeles' => false,
                'jog_iras' => true
            ],
            [
                'name' => 'vezető - iskola1',
                'email' => 'vezeto@iskola1.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola1',
                'keresztnev' => 'Vezető',
                'iskola_id' => 2,
                'munkakor_id' => 2,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'igazgató - iskola1',
                'email' => 'igazgato@iskola1.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola1',
                'keresztnev' => 'Igazgató',
                'iskola_id' => 2,
                'munkakor_id' => 3,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'admin - iskola2',
                'email' => 'admin@iskola2.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola2',
                'keresztnev' => 'Admin',
                'iskola_id' => 3,
                'munkakor_id' => 5,
                'jog_admin' => true,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'dolgozó - iskola2',
                'email' => 'dolgozo@iskola2.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola2',
                'keresztnev' => 'Dolgozó',
                'iskola_id' => 3,
                'munkakor_id' => 1,
                'jog_admin' => false,
                'jog_ertekeles' => false,
                'jog_iras' => true
            ],
            [
                'name' => 'vezető - iskola2',
                'email' => 'vezeto@iskola2.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola2',
                'keresztnev' => 'Vezető',
                'iskola_id' => 3,
                'munkakor_id' => 2,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'igazgató - iskola2',
                'email' => 'igazgato@iskola2.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola2',
                'keresztnev' => 'Igazgató',
                'iskola_id' => 3,
                'munkakor_id' => 3,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'admin - iskola3',
                'email' => 'admin@iskola3.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola3',
                'keresztnev' => 'Admin',
                'iskola_id' => 4,
                'munkakor_id' => 5,
                'jog_admin' => true,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'dolgozó - iskola3',
                'email' => 'dolgozo@iskola3.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola3',
                'keresztnev' => 'Dolgozó',
                'iskola_id' => 4,
                'munkakor_id' => 1,
                'jog_admin' => false,
                'jog_ertekeles' => false,
                'jog_iras' => true
            ],
            [
                'name' => 'vezető - iskola3',
                'email' => 'vezeto@iskola3.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola3',
                'keresztnev' => 'Vezető',
                'iskola_id' => 4,
                'munkakor_id' => 2,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ],
            [
                'name' => 'igazgató - iskola3',
                'email' => 'igazgato@iskola3.hu',
                'password' =>  Hash::make('TitokTitok'),
                'vezeteknev' => 'Iskola3',
                'keresztnev' => 'Igazgató',
                'iskola_id' => 4,
                'munkakor_id' => 3,
                'jog_admin' => false,
                'jog_ertekeles' => true,
                'jog_iras' => true
            ]      */
    }
}
