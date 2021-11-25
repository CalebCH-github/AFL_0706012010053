<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection')->insert([
            // 'collection_id' => 1,
            'collection_name' => 'HW Exotics',
            'cars' => 15,
            'company' => 'Mattel',
            'image_path' => '/img/HW_Exotics_logo.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('collection')->insert([
            // 'collection_id' => 2,
            'collection_name' => 'Nightburnerz',
            'cars' => 14,
            'company' => 'Mattel',
            'image_path' => '/img/nightburnerz.jfif',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('collection')->insert([
            //'collection_id' => 3,
            'collection_name' => 'HW City',
            'cars' => 13,
            'company' => 'Mattel',
            'image_path' => '/img/HW_City.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('collection')->insert([
            //'collection_id' => 4,
            'collection_name' => 'HW Race',
            'cars' => 12,
            'company' => 'Mattel',
            'image_path' => '/img/HW_Race.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('collection')->insert([
            //'collection_id' => 5,
            'collection_name' => 'HW Workshop',
            'cars' => 11,
            'company' => 'Mattel',
            'image_path' => '/img/HW_Workshop.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('collection')->insert([
            //'collection_id' => 6,
            'collection_name' => 'Street Beasts',
            'cars' => 10,
            'company' => 'Mattel',
            'image_path' => '/img/Street Beasts.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('collection')->insert([
            //'collection_id' => 7,
            'collection_name' => 'X-Raycers',
            'cars' => 9,
            'company' => 'Mattel',
            'image_path' => '/img/x raycers.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
    }
}
