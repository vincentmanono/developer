<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class,25)->create();
        User::create([
        'name' => "Abraham Kivondo",
        'phone' => "0707585566",
        'email' => "abrahamkivosh@gmail.com",
        'type' =>"super",
        'email_verified_at' => now(),
        'password' => Hash::make("password") , // password
        'remember_token' => Str::random(10),
        ]) ;
        User::create([
            'name' => "vincent Manono",
            'phone' => "0753360651",
            'email' => "manonovincent95@gmail.com",
            'type' =>"super",
            'email_verified_at' => now(),
            'password' => Hash::make("password") , // password
            'remember_token' => Str::random(10),
            ]) ;
    }
}
