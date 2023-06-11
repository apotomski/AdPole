<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('announcements');
    }
}
