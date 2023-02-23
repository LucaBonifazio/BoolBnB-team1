<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Http\Controllers\Controller;
use App\Sponsorship;
use Illuminate\Http\Request;

class SponsorshipController extends Controller
{

    public function index()
    {
        $sponsorships = Sponsorship::paginate();
        $apartments = Apartment::all();

        return view('admin.sponsorships.index', [
            'sponsorships'  => $sponsorships,
            'apartments'    => $apartments
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


    public function show(Sponsorship $sponsorship)
    {
        return view('admin.sponsorships.show', compact('sponsorship'));
    }


    // public function edit(Sponsorship $sponsorship)
    // {
    //     //
    // }


    // public function update(Request $request, Sponsorship $sponsorship)
    // {
    //     //
    // }


    // public function destroy(Sponsorship $sponsorship)
    // {
    //     //
    // }
}
