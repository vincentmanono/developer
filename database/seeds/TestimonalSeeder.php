<?php

use Illuminate\Database\Seeder;

class TestimonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Testimonal::class,25)->create();
    }
}
