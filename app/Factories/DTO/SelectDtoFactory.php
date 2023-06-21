<?php

namespace App\Factories\DTO;

use App\Models\Category;
use App\Models\DTO\SelectDTO;
use Illuminate\Support\Collection;

class SelectDtoFactory
{
    public static function createDurationCollection(): Collection
    {
        return collect([
            SelectDTO::from(['title' => '15 dni', 'value' => 15]),
            SelectDTO::from(['title' => '30 dni', 'value' => 30]),
        ]);
    }

    public static function createCategoryCollection(): Collection
    {
        $categories = Category::all();
        $collection = collect();

        if(!$categories->isEmpty()) {
            $categories->map(function($item) use ($collection) {
                $collection->push(SelectDTO::from([
                    'title' => $item->name,
                    'value' => $item->id,
                ]));
            });
        }

        return $collection;
    }
}