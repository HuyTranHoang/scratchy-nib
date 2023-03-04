<?php

namespace App\Http\Controllers;


use App\Http\Requests\StylePostRequest;
use App\Http\Requests\StylePutRequest;
use App\Models\CalligraphyCategory;

use App\Models\CalligraphyStyle;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CalligraphyStylesController extends Controller
{
    public function index()
    {
        return view('admin.styles.index', [
            'styles' => CalligraphyStyle::all(),
        ]);
    }

    public function create()
    {
        return view('admin.styles.create',[
            'categories' => CalligraphyCategory::all()
        ]);
    }

    public function store(StylePostRequest $request)
    {
        $validated = $request->validated();
        CalligraphyStyle::create($validated);
        Alert::success('Success', 'New calligraphy category successfully added!')->autoClose(1500);
        return redirect(route('styles.index'));
    }

    public function edit(CalligraphyStyle $style)
    {
        return view('admin.styles.edit',[
            'style' => $style,
            'categories' => CalligraphyCategory::all()
        ]);
    }

    public function update(StylePutRequest $request, CalligraphyStyle $style)
    {
        $validated = $request->validated();
        $style->update($validated);
        Alert::success('Success', 'Calligraphy category succesfully updated!')->autoClose(1500);
        return redirect(route('styles.index'));
    }

    //xong
    public function destroy(CalligraphyStyle $style)
    {
        $style->delete();
        Alert::warning('Success', 'Calligraphy style succesfully deleted!')->autoClose(1500);
        return redirect(route('styles.index'));
    }
}
