<?php

namespace App\Services\DB\Announcemnts;

use App\Models\Announcement;
use App\Models\DTO\AnnouncementDTO;
use App\Interfaces\DTO\ModelDtoInterface;
use Carbon\Exceptions\InvalidTypeException;
use App\Interfaces\Services\DB\CreateServiceInterface;

class AnnouncementsCreateService implements CreateServiceInterface
{
    public function create(ModelDtoInterface $dto): Announcement
    {
        if(!($dto instanceof AnnouncementDTO))
            throw new InvalidTypeException();

        $model = new Announcement();

        return $model;
    }
}