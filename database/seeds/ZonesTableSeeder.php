<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zone::create([
            'name'  => 'A',
            'name'  => 'B',
            'name'  => 'C',
            'name'  => 'D',
            'name'  => 'E',
        ]);
    }
}
