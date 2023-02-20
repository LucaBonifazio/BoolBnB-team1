<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    private $validation = [
        'user_id' => 'integer|exist:users,id',
        'title' => 'string|required|max:100',
        'slug'      => [
            'required',
            'string',
            'max:100',
        ],
        'n_rooms' => 'integer|required',
        'n_beds' => 'integer|required', 
        'n_bathrooms' => 'integer|required', 
        'square_metres' => 'integer|required',
        'picture' => 'url|max:500',
        'uploaded_image' => 'nullable|image|max:500',
        'visibility' => 'boolean',
        'latitude' => ['required|regex:/^-?\d{1,2}.\d{1,8}$/'],
        'longitude' => ['required|regex:/^-?\d{1,3}.\d{1,8}$/'],
        'state' => 'required|string|max:100',
        'city' => 'required|string|max:200',
        'address' => 'required|string|max:250',
        'apartment_number' => 'integer|required' //TODO:verificare una volta installata l'API
    ];


    public function index()
    {
        $apartments = Apartment::paginate();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Apartment $apartment)
    {
        //
    }


    public function edit(Apartment $apartment)
    {
        //
    }


    public function update(Request $request, Apartment $apartment)
    {
        //
    }


    public function destroy(Apartment $apartment)
    {
        //
    }
}
