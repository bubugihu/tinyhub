<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker=Faker\Factory::create();
        // $limit=10;
        // for ($i=0; $i < $limit; $i++) { 
        //     DB::table('category')->insert([
        //         'category_name'=>$faker->name,
        //         'description'=>$faker->sentence,
        //     ]);
        // }
        factory(App\Category::class,5)->create();
    }
}
