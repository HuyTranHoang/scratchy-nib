<?php

namespace App\Http\Controllers;

use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use Illuminate\Http\Request;

class CalligraphyStylesController extends Controller
{
    public function index()
    {
        return view('admin.styles.index',[
            'styles' => CalligraphyStyle::all()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(CalligraphyStyle $calliraphyStyle)
    {
    }

    public function edit(CalligraphyStyle $calliraphyStyle)
    {
    }

    public function update(Request $request, CalligraphyStyle $calliraphyStyle)
    {
    }

    public function destroy(CalligraphyStyle $calliraphyStyle)
    {
    }
}
