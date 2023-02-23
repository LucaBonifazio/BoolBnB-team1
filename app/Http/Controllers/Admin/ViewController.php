<?php

namespace App\Http\Controllers\Admin;

use App\View;
use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{

    public function index()
    {
        $views = View::where('apartment_id', Auth::id())->paginate();
        $apartments = Apartment::all();

        return view('admin.views.index',[
            'views' => $views,
            'apartments' => $apartments
        ]);
    }


    // public function create()
    // {
    //     //
    // }


    // public function store(Request $request)
    // {
    //     //
    // }


    public function show(View $view)
    {
        return view('admin.views.show', compact('view'));
    }


    // public function edit(View $view)
    // {
    //     //
    // }


    // public function update(Request $request, View $view)
    // {
    //     //
    // }


    // public function destroy(View $view)
    // {
    //     //
    // }
}
