<?php

namespace App\Http\Controllers;

use Exception;
use App\Enums\SessionKeysEnum;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\AnnouncementSerchFiltersRequest;

class FiltersController extends Controller
{
    public function clearFilters(string $key): RedirectResponse
    {
        session()->forget($key);
        return back();
    }

    public function setFiltersForAnnouncements(AnnouncementSerchFiltersRequest $request): RedirectResponse
    {
        try {
            session([SessionKeysEnum::AnnouncementFiltersKey->value => $request->getData()]);
        } catch (Exception $e) {
            return back()->with('setFiltersError', 'Failed set filters');
        }

        return back();
    }
}
