<?php

namespace App\Http\Controllers;

use stdClass;
use Exception;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Enums\RouteNamesEnum;
use App\Models\DTO\SelectDTO;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
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

        return view('Announcements.create', [
            'action' => RouteNamesEnum::AnnouncementCreate->value,
            'durations' => collect([
                SelectDTO::from(['title' => '15 dni', 'value' => 15]),
                SelectDTO::from(['title' => '30 dni', 'value' => 30]),
            ]),
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
        return view();
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
