<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Service;
use App\Apartment;
use App\Sponsorship;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        'picture'           => 'url',
        'uploaded_image'    => 'nullable|image',
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
        $apartments = Apartment::where('user_id', Auth::id())->paginate();
        $services = Service::all();
        $sponsorships = Sponsorship::all();
        return view('admin.apartments.index', [
            'apartments' => $apartments,
            'services' => $services,
            'sponsorships' => $sponsorships,
        ]);
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
        $img_path = Storage::put('uploads', $data['uploaded_image']);

        $apartment = new Apartment;
        $apartment->user_id          =    auth()->user()->id;
        $apartment->title            =    $data['title'];
        $apartment->slug             =    $data['slug'];
        $apartment->n_rooms          =    $data['n_rooms'];
        $apartment->n_beds           =    $data['n_beds'];
        $apartment->n_bathrooms      =    $data['n_bathrooms'];
        $apartment->square_meters    =    $data['square_meters'];
        $apartment->picture          =    $data['picture'];
        $apartment->uploaded_image   =    $img_path;
        $apartment->visibility = isset($data['visibility']) && $data['visibility'] !== '' ? $data['visibility'] : 1;
        $apartment->latitude = isset($data['latitude']) && $data['latitude'] !== '' ? (float) $data['latitude'] : null;
        $apartment->longitude = isset($data['longitude']) && $data['longitude'] !== '' ? (float) $data['longitude'] : null;
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
        $img_path = Storage::put('uploads', $data['uploaded_image']);

        $apartment = new Apartment;
        $apartment->title            =    $data['title'];
        $apartment->slug             =    $data['slug'];
        $apartment->n_rooms          =    $data['n_rooms'];
        $apartment->n_beds           =    $data['n_beds'];
        $apartment->n_bathrooms      =    $data['n_bathrooms'];
        $apartment->square_meters    =    $data['square_meters'];
        $apartment->picture          =    $data['picture'];
        $apartment->uploaded_image   =    $img_path;
        $apartment->visibility = isset($data['visibility']) && $data['visibility'] !== '' ? $data['visibility'] : 1;
        $apartment->latitude = isset($data['latitude']) && $data['latitude'] !== '' ? (float) $data['latitude'] : null;
        $apartment->longitude = isset($data['longitude']) && $data['longitude'] !== '' ? (float) $data['longitude'] : null;
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
