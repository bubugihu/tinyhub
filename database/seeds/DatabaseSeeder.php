<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailsSeeder::class);
    }
}
