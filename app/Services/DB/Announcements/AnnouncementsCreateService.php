<?php

namespace App\Services\DB\Announcemnts;

use Exception;
use App\Models\Announcement;
use App\Models\DTO\AnnouncementDTO;
use Illuminate\Support\Facades\Log;
use App\Interfaces\DTO\ModelDtoInterface;
use Carbon\Exceptions\InvalidTypeException;
use App\Interfaces\Services\DB\CreateServiceInterface;

class AnnouncementsCreateService implements CreateServiceInterface
{
    public function create(ModelDtoInterface $dto): Announcement
    {
        if(!($dto instanceof AnnouncementDTO))
            throw new InvalidTypeException();

        try {
            $dataFromDto = $dto->toArray();
            
            if($dataFromDto['tags']->isEmpty())
                $dataFromDto['tags'] = null;

            $model = Announcement::create($dataFromDto);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            throw $e;
        }

        return $model;
    }
}