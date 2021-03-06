<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\Hotel;
use App\Models\HotelNutrition;
use App\Models\HotelReview;
use App\Models\Nutrition;
use App\Models\Service;
use App\Models\Tour;
use App\Models\TourReview;
use App\Models\TourService;
use App\Models\СategoryTour;
use App\Models\User;
use App\Models\Сategory;
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

        User::factory(50)->create();
        Hotel::factory(50)->create();
        Tour::factory(50)->create();
        TourReview::factory(100)->create();
        HotelReview::factory(100)->create();
        Contract::factory(10)->create();
        Nutrition::factory(10)->create();
        HotelNutrition::factory(10)->create();
        Service::factory(10)->create();
        TourService::factory(10)->create();
        Сategory::factory(10)->create();
        СategoryTour::factory(10)->create();

    }
}
