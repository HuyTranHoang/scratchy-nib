<?php

namespace App\Http\Controllers;

use App\Models\Calligraphy;
use App\Models\CalligraphyStyle;
use Illuminate\Http\Request;

class CalligraphiesController extends Controller
{
    public function index()
    {
        return view('admin.calligraphies.index',[
            'calligraphies' => Calligraphy::all()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Calligraphy $calligraphy)
    {
    }

    public function edit(Calligraphy $calligraphy)
    {
    }

    public function update(Request $request, Calligraphy $calligraphy)
    {
    }

    public function destroy(Calligraphy $calligraphy)
    {
    }
}
