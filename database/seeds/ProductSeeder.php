<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	foreach (range(1,20) as $index) {

        $faker = Faker::create();
        $title = $faker->words($nb = 3, $asText = true) ;
        $updated_at = $faker->dateTime($max = 'now');
        $slug = str_slug($title);

        DB::table('products')->insert([
            'title' => $title,
            'slug' => $slug,
            'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)  ,
            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 300) ,
            'stock' => $faker->numberBetween($min = 0, $max = 100),
            'created_at' => $faker->dateTime($max = $updated_at),
            'updated_at' => $updated_at,
        ]);

        }
    }
}
