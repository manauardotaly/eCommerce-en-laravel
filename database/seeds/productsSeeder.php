<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker\Generator as Faker;
use Faker\Factory as Faker;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=5; $i++){
        DB::table('products')->insert([
            'name'     => $faker->word,
            'price'    => 220,
            'category' =>  'clothes',
            'description' =>  $faker->text(200),
            'gallery' =>  $faker->image('public/images',640,480, null, false),
        ]);
    }
    }
}

