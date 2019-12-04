<?php

use Illuminate\Database\Seeder;

class ShapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shape::create([
            'name'  => 'Testing',
        ]);
    }
}
