<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bikes')->insert([
            'title' => 'BICICLETA CUBE STING',
            'image' => '1.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'BICICLETA RACE Blue Green',
            'image' => '2.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'LITENING C:68 SL Team Wanty',
            'image' => '3.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'CROSS RACE C:62 PRO Grey Orange',
            'image' => '4.jpg',
        ]);
        DB::table('bikes')->insert([
            'title' => 'BICICLETA CUBE STING',
            'image' => '1.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'BICICLETA RACE Blue Green',
            'image' => '2.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'LITENING C:68 SL Team Wanty',
            'image' => '3.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'CROSS RACE C:62 PRO Grey Orange',
            'image' => '4.jpg',
        ]);
        DB::table('bikes')->insert([
            'title' => 'BICICLETA CUBE STING',
            'image' => '1.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'BICICLETA RACE Blue Green',
            'image' => '2.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'LITENING C:68 SL Team Wanty',
            'image' => '3.jpg',
        ]);

        DB::table('bikes')->insert([
            'title' => 'CROSS RACE C:62 PRO Grey Orange',
            'image' => '4.jpg',
        ]);
    }
}
