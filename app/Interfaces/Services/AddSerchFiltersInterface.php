<?php

namespace App\Interfaces\Services;

use Illuminate\Database\Eloquent\Builder;
use App\Interfaces\DTO\FiltersDtoInterface;

interface AddSerchFiltersInterface
{
    /**
     * Add filters for Eloquent query
     * 
     * @param Illuminate\Database\Eloquent\Builder $query 
     * @param App\Interfaces\DTO\FiltersDtoInterface $filters
     * 
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function addSerchFiltersToQuery(Builder $query, FiltersDtoInterface $filters): Builder;
}