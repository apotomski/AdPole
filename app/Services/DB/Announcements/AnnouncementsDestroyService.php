<?php

namespace App\Services\DB\Announcemnts;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\Services\DB\DestroyServiceInterface;

class AnnouncementsDestroyService implements DestroyServiceInterface
{
    public function destroy(Model $model): void
    {
        
    }
}