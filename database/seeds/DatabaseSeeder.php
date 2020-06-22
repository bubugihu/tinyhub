<?php

use Illuminate\Database\Eloquent\Model;
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
        $this->call(UsersSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailsSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(BannerSeeder::class);
    }
}
