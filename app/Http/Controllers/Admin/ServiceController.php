<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // private $validation = [
    //     'name'         => 'string|required|max:50',
    //     'slug'          => [
    //         'required',
    //         'string',
    //         'max:50',
    //     ],
    // ];

    public function index()
    {
        $services = Service::paginate();
        return view('admin.services.index', compact('services'));
    }


    // public function create()
    // {
    //     //
    // }


    // public function store(Request $request)
    // {
    //     //
    // }


    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }


    // public function edit(Service $service)
    // {
    //     //
    // }


    // public function update(Request $request, Service $service)
    // {
    //     //
    // }


    // public function destroy(Service $service)
    // {
    //     //
    // }
}
