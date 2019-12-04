<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// composer dump-autoload
    	// php artisan db:seed
        $this->call([
	        UsersTableSeeder::class,
	        ZoneTableSeeder::class,
	        ShapesTableSeeder::class,
	        PropertyTypesTableSeeder::class,
	        PropertyStatusesTableSeeder::class,
	        PropertiesTableSeeder::class,
	        PropertyPriceHistoriesTableSeeder::class,

    	]);
    }
}
