<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Praca' => 'Ogłoszenia związane z pracą',
            'Wynajem' => 'Ogłoszenia związane z wynajmem',
            'Motoryzacja' => 'Ogłoszenia związane z motoryzacją',
            'AGD' => 'Ogłoszenia związane z AGD',
            'Budowlanka' => 'Ogłoszenia związane z budowlanką',
            'Sport' => 'Ogłoszenia związane ze sportem',
            'Żywność' => 'Ogłoszenia związane z jedzeniem',
        ];

        foreach($categories as $categoryName => $categoryDescription)
            Category::create([
                'name' => $categoryName,
                'description' => $categoryDescription,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}
