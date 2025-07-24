<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function schedule(): View
    {
        return view('admin.schedule', [
            'title' => 'Admin Panel',
            'title_sidebar' => 'Tailwindcss',
            'breadcrumbs' => 'Schedule'
        ]);
    }
}
