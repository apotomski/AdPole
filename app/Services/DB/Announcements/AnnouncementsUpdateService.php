<?php

namespace App\Services\DB\Announcemnts;

use App\Models\Announcement;
use App\Models\DTO\AnnouncementDTO;
use Illuminate\Database\Eloquent\Model;
use App\Interfaces\DTO\ModelDtoInterface;
use Carbon\Exceptions\InvalidTypeException;
use App\Interfaces\Services\DB\UpdateServiceInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class AnnouncementsUpdateService implements UpdateServiceInterface
{
    public function update(Model $model, ModelDtoInterface $dto): Announcement
    {
        if(!($dto instanceof AnnouncementDTO))
            throw new InvalidTypeException();
        
        try {
            $dataFromDto = $dto->toArray();

            if($dataFromDto['tags']->isEmpty())
                $dataFromDto['tags'] = null;

            $model->fill($dataFromDto);
            $model->save();
        } catch (Exception $e) {
            Log::info($e->getMessage());
            throw $e;
        }

        return $model;
    }
}