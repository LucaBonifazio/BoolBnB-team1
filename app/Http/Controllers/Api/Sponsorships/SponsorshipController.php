<?php

namespace App\Http\Controllers\Api\Sponsorships;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sponsorship;

class SponsorshipController extends Controller
{
    public function index(Request $request) {

        $sponsorships = Sponsorship::all();

        return response()->json($sponsorships,200);
    }
}
