<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OktatokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oktatos')->insert([
            [
                'vezeteknev' => 'Németh',
                'keresztnev' => 'József',
                'om_azonosito' => '700100',
                'iskola_id' => 2,
                'munkakor_id' => 1,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Projektoktatás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Horváth',
                'keresztnev' => 'Anna',
                'om_azonosito' => '700101',
                'iskola_id' => 2,
                'munkakor_id' => 1,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Projektoktatás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Kiss',
                'keresztnev' => 'Zoltán',
                'om_azonosito' => '700102',
                'iskola_id' => 2,
                'munkakor_id' => 2,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Minőségbiztosítás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Nagyné Kiss',
                'keresztnev' => 'Enikő',
                'om_azonosito' => '700103',
                'iskola_id' => 2,
                'munkakor_id' => 3,
                'vegzettsegek' => 'Egyetem, Vezetőképző',
                'tovabbkepzesek' => 'Minőségbiztosítás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],




            [
                'vezeteknev' => 'Kiss',
                'keresztnev' => 'József',
                'om_azonosito' => '700200',
                'iskola_id' => 3,
                'munkakor_id' => 1,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Projektoktatás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Nagy',
                'keresztnev' => 'Anna',
                'om_azonosito' => '700201',
                'iskola_id' => 3,
                'munkakor_id' => 1,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Projektoktatás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Horváth',
                'keresztnev' => 'Zoltán',
                'om_azonosito' => '700202',
                'iskola_id' => 3,
                'munkakor_id' => 2,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Minőségbiztosítás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Németh',
                'keresztnev' => 'Péter',
                'om_azonosito' => '700103',
                'iskola_id' => 3,
                'munkakor_id' => 3,
                'vegzettsegek' => 'Egyetem, Vezetőképző',
                'tovabbkepzesek' => 'Minőségbiztosítás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],



            [
                'vezeteknev' => 'Horváth',
                'keresztnev' => 'József',
                'om_azonosito' => '700400',
                'iskola_id' => 4,
                'munkakor_id' => 1,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Projektoktatás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Németh',
                'keresztnev' => 'Anna',
                'om_azonosito' => '700401',
                'iskola_id' => 4,
                'munkakor_id' => 1,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Projektoktatás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Kissné',
                'keresztnev' => 'Nagy Piroska',
                'om_azonosito' => '700402',
                'iskola_id' => 4,
                'munkakor_id' => 2,
                'vegzettsegek' => 'Egyetem',
                'tovabbkepzesek' => 'Minőségbiztosítás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ],
            [
                'vezeteknev' => 'Nagy',
                'keresztnev' => 'József',
                'om_azonosito' => '700403',
                'iskola_id' => 4,
                'munkakor_id' => 3,
                'vegzettsegek' => 'Egyetem, Vezetőképző',
                'tovabbkepzesek' => 'Minőségbiztosítás a szakképzésben',
                'oneletrajz' => 'önéletrajz'
            ]

    ]);
    }
}
