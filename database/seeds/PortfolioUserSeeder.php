<?php

use Illuminate\Database\Seeder;

class PortfolioUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PortfolioUser::class,25);
    }
}
