<?php

namespace App\Http\Controllers;

use App\Models\Airbase;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AirbaseController extends Controller
{
    private $airbases;

    public function __construct()
    { 
        $this->airbases = Airbase::all(); 
    }
    //
    public function index(): View
    {
        return view('airbases.home', [
            'title' => 'Tailwindcss Express',
            'airbase' => $this->airbases,
        ]);
    }

    public function packing($id): View
    {
        return view('airbases.pages.packing',[
            'title' => 'Judul',
        ], compact($id));
    }

    public function facility($id): View
    {
        return view('airbases.pages.facility',[
            'title' => 'Judul',
        ], compact($id));
    }

    public function store()
    {

    }

    // public function create(Request $request): RedirectResponse
    // {

    // }

    // public function edit(Request $request): RedirectResponse
    // {

    // }
}