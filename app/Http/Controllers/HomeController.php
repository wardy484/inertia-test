<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Inertia::render('Home', [
            'people' => People::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first' => 'required',
            'last' => 'required'
        ]);

        People::create([
            'first_name' => $request->first,
            'last_name' => $request->last
        ]);

        return redirect()->route("home");
    }
}
