<?php

namespace App\Http\Controllers\Api;

use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{

    public function index()
    {
        $apartments = Apartment::paginate();

        return response()->json([
            'success' => true,
            'results' => $apartments
        ]);
    }


    public function show(Apartment $apartment)
    {
        $apartment = Apartment::all();


        if($apartment) {
            return response()->json([
                'success' => true,
                'results' => $apartment,
            ]);
        } else {
            return response()->json([
                'success' => false,
            ]);
        }
    }

    public function random() {
        $apartments = Apartment::inRandomOrder()->limit(9)->get();

        return response()->json([
            'success' => true,
            'results' => $apartments,
        ]);
    }
}
