<?php

namespace App\Interfaces\Services\DB;

use Illuminate\Database\Eloquent\Model;

interface DestroyServiceInterface
{
    public function destroy(Model $model): void;
}