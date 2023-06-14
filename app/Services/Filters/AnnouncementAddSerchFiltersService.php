<?php

namespace App\Services\Filters;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use App\Models\DTO\AnnouncementFiltersDTO;
use App\Interfaces\DTO\FiltersDtoInterface;
use Carbon\Exceptions\InvalidTypeException;
use App\Interfaces\Services\AddSerchFiltersInterface;

class AnnouncementAddSerchFiltersService implements AddSerchFiltersInterface
{
    /**
     * Add filters for Announcement query
     * 
     * @param Illuminate\Database\Eloquent\Builder $query 
     * @param App\Interfaces\DTO\AnnouncementDto $filters
     * 
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function addSerchFiltersToQuery(Builder $query, FiltersDtoInterface $filters): Builder
    {
        if(!($filters instanceof AnnouncementFiltersDTO))
            throw new InvalidTypeException();

        if(!empty($filters->provincesId)) {
            $query = $query->where('province_id', $filters->provincesId);
        }

        if(!empty($filters->city)) {
            $query = $query->whereRaw('LOWER(city) = ?', [
                Str::lower(
                    Str::of($filters->city)->trim()
                )
            ]);
        }

        if(!empty($filters->dateFrom)) {
            $query = $query->where('activity_start', '>=', $filters->dateFrom);
        }

        if(!is_null($filters->tags) && !$filters->tags->isEmpty()) {
            $tags = $filters->tags->map(function(string $item) {
                return Str::lower(
                    Str::of($item)->trim()
                );
            });
            $query = $query->whereJsonContains('tags', $tags->all());
        }

        $query = $query->orderBy('activity_start', $filters->sortBy);

        return $query;
    }
}