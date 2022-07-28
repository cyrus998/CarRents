<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rent::create([
            'name' => 'Cyrus Francisco',
            'number' => '09214673943',
            'carunit' => 'Toyota Vios',
            'daysrented' => '5',
            'price' => '4999',
            'status' => 'Pending',
            'image' => 'public/rents/mine.png',
        ]);

        Rent::create([
            'name' => 'Adrian Villanueva',
            'number' => '09556625512',
            'carunit' => 'Toyota Vios',
            'daysrented' => '3',
            'price' => '2999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Elon Musk',
            'number' => '09556625544',
            'carunit' => 'Toyota Rush',
            'daysrented' => '6',
            'price' => '7999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Reiner Braun',
            'number' => '09558854451',
            'carunit' => 'Toyota Fortuner',
            'daysrented' => '1',
            'price' => '1899',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Sasha Braus',
            'number' => '.9885562281',
            'carunit' => 'Toyota Fortuner',
            'daysrented' => '1',
            'price' => '1899',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Rianne Reyes',
            'number' => '09558874451',
            'carunit' => 'Toyota Vios',
            'daysrented' => '3',
            'price' => '2999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Rianne Reyes',
            'number' => '09558874451',
            'carunit' => 'Isuzu MUX',
            'daysrented' => '3',
            'price' => '4999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Rick Roll',
            'number' => '09887745547',
            'carunit' => 'Nissan Navara',
            'daysrented' => '3',
            'price' => '4999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Yuri Forger',
            'number' => '09885562251',
            'carunit' => 'Toyota Innova',
            'daysrented' => '3',
            'price' => '3999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Chris Richards',
            'number' => '09885565555',
            'carunit' => 'Toyota Vios',
            'daysrented' => '3',
            'price' => '3999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);

        Rent::create([
            'name' => 'Rinna Monterey',
            'number' => '09888856621',
            'carunit' => 'Hyundai Accent',
            'daysrented' => '3',
            'price' => '3999',
            'status' => 'Pending',
            'image' => 'public/rents/dummy.png',
        ]);
    }
}
