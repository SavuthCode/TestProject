<?php

use Illuminate\Database\Seeder;

class PropertyStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyStatus::create([
            'name'  => 'Tesing',
        ]);
    }
}
