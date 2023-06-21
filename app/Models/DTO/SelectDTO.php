<?php

namespace App\Models\DTO;

use Spatie\LaravelData\Data;

class SelectDTO extends Data
{
    public string $title;
    public mixed $value;
}