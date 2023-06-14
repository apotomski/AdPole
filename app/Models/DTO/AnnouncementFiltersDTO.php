<?php

namespace App\Models\DTO;

use Spatie\LaravelData\Data;
use App\Interfaces\DTO\FiltersDtoInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AnnouncementFiltersDTO extends Data implements FiltersDtoInterface
{
    public string $sortBy;
    public ?string $provincesId;
    public ?string $city;
    public ?Carbon $dateFrom;
    public ?Collection $tags;
}