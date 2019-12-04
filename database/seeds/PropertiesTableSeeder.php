<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'name'                => 'Testing',
            'property_type_id'    => '1',
            'property_status_id	' => '1',
            'zone_id'             => '1',
            'shape_id'            => '1',
            'rent_price'          => '900',
            'list_price'          => '1000',
            'sale_price'          => '1400',
            'sold_price'          => '1600',
        ]);
    }
}
