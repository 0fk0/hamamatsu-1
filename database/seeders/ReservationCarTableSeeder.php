<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use App\Models\ReservationCar;
use Illuminate\Database\Seeder\factory;

class ReservationCarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\ReservationCar::factory(10)->create();
        //factory(reservation_car::class)->create();
    }
}
