<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //'carunit', 'price', 'transmission', 'seats', 'picture'
    {
        Car::create([
            'carunit' => 'Toyota Vios',
            'price' => 1299,
            'transmission' => 'Manual',
            'seats' => '5',
            'picture' => 'https://i.ytimg.com/vi/y6mPNTytyQo/maxresdefault.jpg'
        ]);

        Car::create([
            'carunit' => 'Toyota Fortuner',
            'price' => 1899,
            'transmission' => 'Automatic',
            'seats' => '10',
            'picture' => 'https://upload.wikimedia.org/wikipedia/commons/6/66/2015_Toyota_Fortuner_%28New_Zealand%29.jpg'
        ]);

        Car::create([
            'carunit' => 'Honda Civic',
            'price' => 1699,
            'transmission' => 'Automatic',
            'seats' => '5',
            'picture' => 'http://images.summitmedia-digital.com/topgear/images/2022/01/31/honda-civic-type-r-1-1643644158.jpg'
        ]);

        Car::create([
            'carunit' => 'Isuzu MUX',
            'price' => 1899,
            'transmission' => 'Automatic',
            'seats' => '10',
            'picture' => 'https://d1hv7ee95zft1i.cloudfront.net/custom/car-model-photo/mobile/gallery/2022-isuzu-mu-x-exterior-quarter-front-philippines-614b0fa8d9ad9.jpg'
        ]);

        Car::create([
            'carunit' => 'Toyota Innova',
            'price' => 1799,
            'transmission' => 'Manual',
            'seats' => '12',
            'picture' => 'https://media.karousell.com/media/photos/products/2019/07/20/toyota_innova_touring_sport_1563624944_9186df9e_progressive.jpg'
        ]);

        Car::create([
            'carunit' => 'Mitsubishi Xpander',
            'price' => 1699,
            'transmission' => 'Automatic',
            'seats' => '8',
            'picture' => 'https://www.autodeal.com.ph/custom/car-model-photo/original/2022-mitsubishi-xpander-philippines-front-quarter-625e257fca646.jpg'
        ]);

        Car::create([
            'carunit' => 'Mitsubishi L300',
            'price' => 1899,
            'transmission' => 'Manual',
            'seats' => '10',
            'picture' => 'https://d1hv7ee95zft1i.cloudfront.net/custom/car-model-photo/mobile/gallery/mitsubishi-l300-exterior-side-5d8d7eb3c8491.jpg'
        ]);

        Car::create([
            'carunit' => 'Nissan Navara',
            'price' => 1899,
            'transmission' => 'Automatic',
            'seats' => '+',
            'picture' => 'https://cdn.motor1.com/images/mgl/013Gp/s1/2021-nissan-navara-facelift.jpg'
        ]);

        Car::create([
            'carunit' => 'Toyota Rush',
            'price' => 1699,
            'transmission' => 'Manual',
            'seats' => '8',
            'picture' => 'https://carnetwork.s3.ap-southeast-1.amazonaws.com/file/5b3c2670549d4e5fb62d48a68eb45be7.jpg'
        ]);

        Car::create([
            'carunit' => 'Toyota Wigo',
            'price' => 1299,
            'transmission' => 'Manual',
            'seats' => '4',
            'picture' => 'https://img.philcarprice.com/2021/10/27/SYHygZTD/toyota-wigo-exterior-832b.jpg'
        ]);

        Car::create([
            'carunit' => 'Toyota Hilux',
            'price' => 1799,
            'transmission' => 'Automatic',
            'seats' => '6',
            'picture' => 'https://images.autofun.ph/file1/b5fc7021240e46689e81a0a93197ffd0_800.png'
        ]);

        Car::create([
            'carunit' => 'Hyundai Accent',
            'price' => 1499,
            'transmission' => 'Manual',
            'seats' => '5',
            'picture' => 'https://i0.wp.com/bestsellingcarsblog.com/wp-content/uploads/2012/12/Hyundai-Accent-Panama-August-2012.jpg?fit=600%2C425&ssl=1'
        ]);
    }
}
