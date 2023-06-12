<?php

namespace App\Models\DTO;

use Spatie\LaravelData\Data;
use App\Interfaces\DTO\FiltersDtoInterface;
use Carbon\Carbon;

class AnnouncementDto extends Data implements FiltersDtoInterface
{
    public string $sortBy;
    public ?string $provincesId;
    public ?string $city;
    public ?Carbon $dateFrom;
    public ?array $tags;
}