<?php

use Illuminate\Database\Seeder;

class PropertyTypesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyType::create([
            'name'  => 'Testing',
        ]);
    }
}
