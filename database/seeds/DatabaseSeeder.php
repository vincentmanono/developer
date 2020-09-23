<?php

use App\Comment;
use App\PortfolioUser;
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

       $this->call(UserSeeder::class);
       $this->call(ClientSeeder::class);
       $this->call(PortfolioSeeder::class);
       $this->call(PortfolioUserSeeder::class);
       $this->call(BlogSeeder::class);
       $this->call(TestimonalSeeder::class);
       $this->call(ContactSeeder::class);
       $this->call(MetadataSeeder::class);
       $this->call(SubscriberSeeder::class);
       $this->call(CommentSeeder::class);

    }
}
