<?php

namespace App\Interfaces\Services\DB;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\DTO\ModelDtoInterface;

interface UpdateServiceInterface
{
    public function update(Model $model, ModelDtoInterface $dto): Model;
}