<?php

namespace App\Http\Controllers\Admin;

use App\Apartment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ApartmentController extends Controller
{
    private $validation = [
        'user_id'           => 'integer|exist:users,id',
        'title'             => 'string|required|max:100',
        'slug'              => [
            'required',
            'string',
            'max:100',
        ],
        'n_rooms'           => 'integer|required',
        'n_beds'            => 'integer|required',
        'n_bathrooms'       => 'integer|required',
        'square_meters'     => 'integer|required',
        'picture'           => 'url|max:1000',
        'uploaded_image'    => 'nullable|image|max:1000',
        'visibility'        => 'boolean',
        'latitude'          => 'required|between:-90,90',
        'longitude'         => 'required|between:-180,180',
        // 'latitude'          => ['required|regex:/^-?\d{1,2}.\d{1,8}$/'],
        // 'longitude'         => ['required|regex:/^-?\d{1,3}.\d{1,8}$/'],
        'state'             => 'required|string|max:100',
        'city'              => 'required|string|max:200',
        'address'           => 'required|string|max:250',
        'apartment_number'  => 'integer|required' //TODO:verificare una volta installata l'API
    ];


    public function index()
    {
        $apartments = Apartment::paginate();
        return view('admin.apartments.index', compact('apartments'));
    }


    public function create()
    {
        return view('admin.apartments.create');
    }


    public function store(Request $request)
    {
        $this->validation['slug'][] = 'unique:apartments';
        $request->validate($this->validation);

        $data = $request->all();

        $apartment = new Apartment;
        $apartment->title            =    $data['title'];
        $apartment->slug             =    $data['slug'];
        $apartment->n_rooms          =    $data['n_rooms'];
        $apartment->n_beds           =    $data['n_beds'];
        $apartment->n_bathrooms      =    $data['n_bathrooms'];
        $apartment->square_meters    =    $data['square_meters'];
        $apartment->picture          =    $data['picture'];
        //$apartment->uploaded_image   =    $data['uploaded_image'];
        $apartment->visibility       =    $data['visibility'];
        $apartment->latitude         =    $data['latitude'];
        $apartment->longitude        =    $data['longitude'];
        $apartment->state            =    $data['state'];
        $apartment->city             =    $data['city'];
        $apartment->address          =    $data['address'];
        $apartment->apartment_number =    $data['apartment_number'];
        $apartment->save();

        return redirect()->route('admin.apartments.show', ['apartment' => $apartment]);
    }


    public function show(Apartment $apartment)
    {
        return view('admin.apartments.show', compact('apartment'));
    }


    public function edit(Apartment $apartment)
    {
        return view('admin.apartments.edit', [
            'apartment' => $apartment
        ]);
    }


    public function update(Request $request, Apartment $apartment)
    {
        $this->validation['slug'][] = Rule::unique('apartments')->ignore($apartment);
        $request->validate($this->validation);

        $data = $request->all();

        $apartment = new Apartment;
        $apartment->title            =    $data['title'];
        $apartment->slug             =    $data['slug'];
        $apartment->n_rooms          =    $data['n_rooms'];
        $apartment->n_beds           =    $data['n_beds'];
        $apartment->n_bathrooms      =    $data['n_bathrooms'];
        $apartment->square_meters    =    $data['square_meters'];
        $apartment->picture          =    $data['picture'];
        //$apartment->uploaded_image   =    $data['uploaded_image'];
        $apartment->visibility       =    $data['visibility'];
        $apartment->latitude         =    $data['latitude'];
        $apartment->longitude        =    $data['longitude'];
        $apartment->state            =    $data['state'];
        $apartment->city             =    $data['city'];
        $apartment->address          =    $data['address'];
        $apartment->apartment_number =    $data['apartment_number'];
        $apartment->update();

        return redirect()->route('admin.apartments.show', ['apartment' => $apartment]);
    }


    public function destroy(Apartment $apartment)
    {
        // $apartment->tags()->detach();
        $apartment->delete();

        return redirect()->route('admin.apartments.index')->with('success_delete', $apartment);
    }

    // public function slug(Request $request) {
    //     // localhost:8000/admin/categories/slug?title=ciao a tutti

    //     $title = $request->query('title');

    //     // risponde con il primo slug disponibile restituito in formato JSON per essere usato da JS
    //     $slug = Category::getSlug($title);

    //     return response()->json([
    //         'slug'  => $slug,
    //     ]);
    // }
}
