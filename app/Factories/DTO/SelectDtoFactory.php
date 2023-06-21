<?php

namespace App\Factories\DTO;

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
}