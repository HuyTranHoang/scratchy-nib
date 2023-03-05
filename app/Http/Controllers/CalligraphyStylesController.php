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
        Alert::success('Success', 'New calligraphy style successfully added!')->buttonsStyling(false)->autoClose(1500);
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
        Alert::success('Success', 'Calligraphy style successfully updated!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('styles.index'));
    }

    //xong
    public function destroy(Request $request)
    {
        $StyleID = $request->style_id;
        $style = CalligraphyStyle::findOrFail($StyleID);
        $style->delete();
        Alert::success('Success', 'Calligraphy style succesfully deleted!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('styles.index'));
    }
}
