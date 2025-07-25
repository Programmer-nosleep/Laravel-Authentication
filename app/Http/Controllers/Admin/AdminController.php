<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() : View
    {
      return view('admin.dashboard', [
        'title' => 'Admin Panel',
        'title_sidebar' => 'Tailwindcss',
        'breadcrumbs' => 'Dashboard',
      ]);
    }
    
    //
    public function stats(): View
    {
        return view('components.ui.stats');
    }
}
