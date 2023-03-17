<?php

namespace App\Http\Controllers;


use App\Http\Requests\StylePostRequest;
use App\Http\Requests\StylePutRequest;
use App\Models\CalligraphyCategory;

use App\Models\CalligraphyStyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class CalligraphyStylesController extends Controller
{
    public function index()
    {

        $perPage = 5;
        $page = request()->input('page', 1);
        $totalItems = CalligraphyStyle::filter(request(['styleName','cateID']))->count();
        $totalPages = ceil($totalItems / $perPage);

        if ($page > $totalPages && !request()->styleName) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('styles.index',['page'=> 1]));
        }

        return view('admin.styles.index', [
            'styles' => CalligraphyStyle::filter(request(['styleName','cateID','orderby','sort']))->paginate($perPage)->appends(request()->query()),
            'categories' => CalligraphyCategory::all()
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
        if ($request->hasFile('style_image')) {
            $validated['style_image'] = $request->file('style_image')->store('uploads/styleImages', 'public');
        }

        CalligraphyStyle::create($validated);
        Alert::success('Success', 'New calligraphy style successfully added!')->buttonsStyling(false)->autoClose(2500);
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
        if ($request->hasFile('style_image')) {
            $oldImageName = 'storage/' . $style->style_image;
            if ($oldImageName != 'storage/uploads/styleImages/noImage.jpg') {
                File::delete($oldImageName);
            }
            $validated['style_image'] = $request->file('style_image')->store('uploads/cateImages', 'public');
        }
        $style->update($validated);
        Alert::success('Success', 'Calligraphy style successfully updated!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('styles.index'));
    }

    public function destroy(Request $request)
    {
        $redirectTo = $request->query('redirect_to',route('styles.index'));
        $StyleID = $request->style_id;
        $style = CalligraphyStyle::findOrFail($StyleID);
        $oldImageName = 'storage/' . $style->style_image;
        if ($oldImageName != 'storage/uploads/styleImages/noImage.jpg') {
            File::delete($oldImageName);
        }
        $style->delete();
        Alert::success('Success', 'Calligraphy style succesfully deleted!')->buttonsStyling(false)->autoClose(2500);
        return redirect($redirectTo);
    }
}
