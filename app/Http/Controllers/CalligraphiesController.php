<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalligraphyPostRequest;
use App\Http\Requests\CalligraphyPutRequest;
use App\Models\Calligraphy;
use App\Models\CalligraphyStyle;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CalligraphiesController extends Controller
{
    public function index()
    {
        return view('admin.calligraphies.index', [
            'calligraphies' => Calligraphy::all()
        ]);
    }

    public function create()
    {
        return view('admin.calligraphies.create', [
            'styles' => CalligraphyStyle::all()
        ]);
    }

    public function store(CalligraphyPostRequest $request)
    {
        $validated = $request->validated();
        Calligraphy::create($validated);
        Alert::success('Success', 'New calligraphy succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('calligraphies.index'));
    }

    public function show(Calligraphy $calligraphy)
    {
        abort('404');
    }

    public function edit(Calligraphy $calligraphy)
    {
        return view('admin.calligraphies.edit', [
            'calligraphy' => $calligraphy,
            'styles' => CalligraphyStyle::all()
        ]);
    }

    public function update(CalligraphyPutRequest $request, Calligraphy $calligraphy)
    {
        $validated = $request->validated();
        $calligraphy->update($validated);
        Alert::success('Success', 'Calligraphy succesfully updated!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('calligraphies.index'));
    }

    public function destroy(Request $request)
    {
        $CalligraphyID = $request->calligraphy_id;
        $calligraphy = Calligraphy::findOrFail($CalligraphyID);
        $calligraphy->delete();
        Alert::success('Success', 'Calligraphy category succesfully deleted!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('calligraphies.index'));
    }
}
