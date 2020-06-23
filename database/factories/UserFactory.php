<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'category_name' => $faker->name,
        'description' => $faker->sentence,
    ];
});

$factory->define(App\Product::class, function(Faker $faker){
    return [
        'product_title'=>implode('A',$faker->words(3)),
        'price'=>$faker->numberBetween(0,99999),
        'short_descriptions'=>$faker->text(),
        'long_descriptions'=>$faker->text(),
        'status'=>0,
        'sold_out'=>$faker->numberBetween(0,99999),
        'feature_image'=>$faker->text(),
        'warranty_period'=>$faker->dateTime(),
        'create_product'=>$faker->dateTime(),
        'gallery_id'=>1,
        'category_id'=>1,
        'brand_id'=>1,
    ];
});