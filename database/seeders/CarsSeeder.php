<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'car_name' => 'Exotique',
            'collection_from' => 'HW Exotics',
            'year' => '2019',
            'color' => 'black',
            //'index' => 10,
            'image_path_car' => '/img/Exotique_black_2019.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Aston Martin Vulcan',
            'collection_from' => 'HW Exotics',
            'year' => '2019',
            'color' => 'green',
            //'index' => 3,
            'image_path_car' => '/img/Vulcan_green_2019.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => '95 Mazda RX-7',
            'collection_from' => 'Nightburnerz',
            'year' => '2018',
            'color' => 'yellow',
            //'index' => 4,
            'image_path_car' => '/img/95 mazda rx-7.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Nissan Fairlady Z',
            'collection_from' => 'Nightburnerz',
            'year' => '2017',
            'color' => 'black',
            //'index' => 3,
            'image_path_car' => '/img/fairlady z.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Chill Mill',
            'collection_from' => 'HW City',
            'year' => '2016',
            'color' => 'pink',
            //'index' => 6,
            'image_path_car' => '/img/chill mill_pink_2016.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Repo Duty',
            'collection_from' => 'HW City',
            'year' => '2017',
            'color' => 'black',
            //'index' => 9,
            'image_path_car' => '/img/repo duty_black_2017.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('cars')->insert([
            'car_name' => '24 Ours',
            'collection_from' => 'HW Race',
            'year' => '2014',
            'color' => 'black',
            //'index' => 4,
            'image_path_car' => '/img/24 ours_black_2014.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Super Blitzen',
            'collection_from' => 'HW Race',
            'year' => '2014',
            'color' => 'purple',
            //'index' => 8,
            'image_path_car' => '/img/super blitzen_purple_2014.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Toyota 2000GT',
            'collection_from' => 'HW Workshop',
            'year' => '2014',
            'color' => 'black',
            //'index' => 2,
            'image_path_car' => '/img/toyota 2000gt_black_2014.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Lamborghini Aventador J',
            'collection_from' => 'HW Workshop',
            'year' => '2014',
            'color' => 'blue',
            //'index' => 3,
            'image_path_car' => '/img/lambo aven j_blue_2014.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Croc Rod',
            'collection_from' => 'Street Beasts',
            'year' => '2020',
            'color' => 'green',
            //'index' => 4,
            'image_path_car' => '/img/croc rod_green_2020.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Sharkruiser',
            'collection_from' => 'Street Beasts',
            'year' => '2019',
            'color' => 'pale purple',
            //'index' => 8,
            'image_path_car' => '/img/sharkruiser_pale purple_2019.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'Lindster Prototype',
            'collection_from' => 'X-Raycers',
            'year' => '2020',
            'color' => 'green',
            //'index' => 1,
            'image_path_car' => '/img/lindster prototype_green_2020.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('cars')->insert([
            'car_name' => 'El Viento',
            'collection_from' => 'X-Raycers',
            'year' => '2018',
            'color' => 'blue',
            //'index' => 1,
            'image_path_car' => '/img/el viento_blue_2018.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
