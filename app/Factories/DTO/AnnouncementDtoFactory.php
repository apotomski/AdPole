<?php

namespace App\Factories\DTO;

use App\Models\DTO\SelectDTO;
use Illuminate\Support\Collection;

class AnnouncementDtoFactory
{
    public static function createAnnouncementDto(): Collection
    {
        return collect([
            SelectDTO::from(['title' => '15 dni', 'value' => 15]),
            SelectDTO::from(['title' => '30 dni', 'value' => 30]),
        ]);
    }
}