<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SzempontsorokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('szempontsors')->insert([
            [
                'iskola_id' => '1',
                'megnevezes' => 'Igazgató értékelése',
                'lezarva' => false
            ],
            [
                'iskola_id' => '2',
                'megnevezes' => 'Oktató értékelése',
                'lezarva' => false
            ],
            [
                'iskola_id' => '2',
                'megnevezes' => 'Vezető értékelése',
                'lezarva' => false
            ],
            [
                'iskola_id' => '3',
                'megnevezes' => 'Oktató értékelése',
                'lezarva' => false
            ],
            [
                'iskola_id' => '3',
                'megnevezes' => 'Vezető értékelése',
                'lezarva' => false
            ],
            [
                'iskola_id' => '4',
                'megnevezes' => 'Oktató értékelése',
                'lezarva' => false
            ],
            [
                'iskola_id' => '4',
                'megnevezes' => 'Vezető értékelése',
                'lezarva' => false
            ]
    ]);
    }
}
