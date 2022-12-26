<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // to add the first user in the system manually
        User::create([
            "name" => 'moahmme alagha',
            "email" => 'modyagha7@gmail.com',
            "password" => Hash::make('12345678'),
            "phone_number" => '972599457166'
        ]);
    }
}
