<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IskolakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iskolas')->insert([
            [
                'nev' => 'Szakképzési Centrum - Központi Szervezet',
                'om_azonosito' => '300400',
                'iranyitoszam' => '9700',
                'varos' => 'Szombathely',
                'utca' => 'Minta u. 8-10.',
                'telefon' => '+36-94-520520',
                'email' => 'info@kozpont.hu',
                'logo' => 'logo',
                'fenykep' => 'fenykep'
            ],
            [
                'nev' => 'Iskola1',
                'om_azonosito' => '300400/001',
                'iranyitoszam' => '9700',
                'varos' => 'Szombathely',
                'utca' => 'Minta1 u. 1.',
                'telefon' => '+36-94-320320',
                'email' => 'info@iskola1.hu',
                'logo' => 'logo',
                'fenykep' => 'fenykep'
            ],
            [
                'nev' => 'Iskola2',
                'om_azonosito' => '300400/002',
                'iranyitoszam' => '9700',
                'varos' => 'Szombathely',
                'utca' => 'Minta2 u. 22.',
                'telefon' => '+36-94-268268',
                'email' => 'info@iskola2.hu',
                'logo' => 'logo',
                'fenykep' => 'fenykep'
            ],
            [
                'nev' => 'Iskola3',
                'om_azonosito' => '300400/003',
                'iranyitoszam' => '9700',
                'varos' => 'Szombathely',
                'utca' => 'Minta3 u. 36.',
                'telefon' => '+36-94-525525',
                'email' => 'info@iskola3.hu',
                'logo' => 'logo',
                'fenykep' => 'fenykep'
            ]
    ]);
    }
}
