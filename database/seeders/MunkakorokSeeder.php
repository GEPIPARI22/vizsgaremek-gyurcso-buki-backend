<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunkakorokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('munkakors')->insert([
            [
                'munkakor' => 'oktató'
            ],
            [
                'munkakor' => 'vezető (igah. gyak.okt.vez., stb.)'
            ],
            [
                'munkakor' => 'igazgató'
            ],
            [
                'munkakor' => 'főigazgató'
            ],
            [
                'munkakor' => 'egyéb munkatárs'
            ]
    ]);
    }
}
