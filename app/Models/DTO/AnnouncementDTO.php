<?php

namespace App\Models\DTO;

use Spatie\LaravelData\Data;
use App\Interfaces\DTO\ModelDtoInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AnnouncementDTO extends Data implements ModelDtoInterface
{
    public ?string $id;
    public ?string $userId;
    public string $title;
    public ?string $description;
    public string $categoryId;
    public string $provinceId;
    public ?string $city;
    public Carbon $activityStart;
    public int $duration;
    public ?string $tags;
}