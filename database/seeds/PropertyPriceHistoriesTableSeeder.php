<?php

use Illuminate\Database\Seeder;

class PropertyPriceHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_price_histories')->insert([
            'property_id' => '10',
            'rent_price'  => '900',
            'list_price'  => '1000',
            'sale_price'  => '1400',
            'sold_price'  => '1600',
        ]);
    }
}
