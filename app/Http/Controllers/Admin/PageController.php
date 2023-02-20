<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = Auth::user();
        $apartment = Apartment::paginate();

        return view('admin.dashboard', [
            'user' => $user,
            'apartment' => $apartment,
        ]);
    }
    // public function homepage()
    // {
    //     $user = Auth::user();
    //     $apartment = Apartment::paginate();

    //     return view('guest.homepage', [
    //         'user' => $user,
    //         'apartment' => $apartment,
    //     ]);
    // }
}