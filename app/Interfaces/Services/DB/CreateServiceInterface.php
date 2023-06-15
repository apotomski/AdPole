<?php

namespace App\Interfaces\Services\DB;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\DTO\ModelDtoInterface;

interface CreateServiceInterface
{
    public function create(ModelDtoInterface $dto): Model;
}