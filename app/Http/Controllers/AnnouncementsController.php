<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Announcement;
use App\Enums\RouteNamesEnum;
use Illuminate\Routing\Redirector;
use App\Models\DTO\AnnouncementDTO;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Factories\DTO\SelectDtoFactory;
use App\Services\DB\Announcemnts\AnnouncementsCreateService;
use App\Services\DB\Announcemnts\AnnouncementsUpdateService;
use App\Services\DB\Announcemnts\AnnouncementsDestroyService;
use App\Http\Requests\Announcements\CreateEditAnnouncementRequest;

class AnnouncementsController extends Controller
{
    public function index(): View|Factory
    {
        return view('Announcements.list');
    }

    public function create(): View|Factory
    {

        return view('Announcements.createEdit', [
            'action' => RouteNamesEnum::AnnouncementStore->value,
            'durations' => SelectDtoFactory::createDurationCollection(),
        ]);
    }

    public function store(CreateEditAnnouncementRequest $request): Redirector|RedirectResponse
    {
        try {
            (new AnnouncementsCreateService())->create($request->getData());
        } catch (Exception $e) {
            return redirect()->route('tmp.name', ['error' => 'Failed create']);
        }
        return redirect()->route('tmp.name');
    }

    
    public function edit(Announcement $model): View|Factory
    {
        $dto = AnnouncementDTO::from($model->toArray());
        return view('Announcements.createEdit', [
            'action' => RouteNamesEnum::AnnouncementUpdate->value,
            'durations' => SelectDtoFactory::createDurationCollection(),
            'dto' => $dto,
        ]);
    }

    public function update(Announcement $model, CreateEditAnnouncementRequest $request): Redirector|RedirectResponse
    {
        try {
            (new AnnouncementsUpdateService())->update($model, $request->getData());
        } catch (Exception $e) {
            return redirect()->route('tmp.name', ['error' => 'Failed update']);
        }
        return redirect()->route('tmp.name');
    }

    
    public function destroy(Announcement $model): Redirector|RedirectResponse
    {
        try {
            (new AnnouncementsDestroyService())->destroy($model);
        } catch (Exception $e) {
            return redirect()->route('tmp.name', ['error' => 'Failed destroy']);
        }
        return redirect()->route('tmp.name');
    }
}
