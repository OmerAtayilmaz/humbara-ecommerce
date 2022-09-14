<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
   
    public function index()
    {
        return view('backoffice.slider.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(HomeSlider $homeSlider)
    {
        //
    }


    public function edit(HomeSlider $homeSlider)
    {
        //
    }


    public function update(Request $request, HomeSlider $homeSlider)
    {
        //
    }


    public function destroy(HomeSlider $homeSlider)
    {
        //
    }
}
