<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalligraphyPostRequest;
use App\Http\Requests\CalligraphyPutRequest;
use App\Models\Calligraphy;
use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class CalligraphiesController extends Controller
{
    public function index()
    {

        $perPage = 5;
        $page = request()->input('page', 1);
        $totalItems = Calligraphy::filter(request(['calligraphyName','styleID','cateID']))->count();
        $totalPages = ceil($totalItems / $perPage);

        if ($page > $totalPages && !request()->calligraphyName) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('calligraphies.index',['page'=> 1]));
        }

        return view('admin.calligraphies.index', [
            'calligraphies' => Calligraphy::filter(request(['calligraphyName','styleID','cateID','orderby','sort']))->paginate($perPage)->appends(request()->query()),
            'styles' => CalligraphyStyle::filter(request(['cateID']))->get(),
            'categories' => CalligraphyCategory::all()
        ]);
    }

    public function create()
    {
        return view('admin.calligraphies.create', [
            'styles' => CalligraphyStyle::all(),
            'categories' => CalligraphyCategory::all()
        ]);
    }

    public function store(CalligraphyPostRequest $request)
    {
        $validated = $request->validated();
        $calligraphy = Calligraphy::create($validated);
        if ($request->hasFile('image')) {
            $image['image_name'] = $request->file('image')->store('uploads', 'public');
            $image['calligraphy_id'] = $calligraphy->calligraphy_id;
            GalleryImage::create($image);
        }
        Alert::success('Success', 'New calligraphy succesfully added!')->buttonsStyling(false)->autoClose(2500);
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
            'styles' => CalligraphyStyle::all(),
            'categories' => CalligraphyCategory::all()
        ]);
    }

    public function update(CalligraphyPutRequest $request, Calligraphy $calligraphy)
    {
        $validated = $request->validated();
        $calligraphy->update($validated);
        if ($request->hasFile('image')) {
            if (count($calligraphy -> galleryImage) >= 2) {
                foreach ($calligraphy -> galleryImage as $image) {
                    $oldImageName[] = 'storage/' . $image -> image_name;
                }
            } elseif (count($calligraphy -> galleryImage) == 1) {
                $oldImageName[] = 'storage/' . $calligraphy -> galleryImage ->first() -> image_name;
            }
            if ($oldImageName ?? false) {
                File::delete($oldImageName);
            }
            GalleryImage::where('calligraphy_id', $calligraphy->calligraphy_id)->delete();
            $image['image_name'] = $request->file('image')->store('uploads', 'public');
            $image['calligraphy_id'] = $calligraphy->calligraphy_id;
            GalleryImage::create($image);
        }

        Alert::success('Success', 'Calligraphy succesfully updated!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('calligraphies.index'));
    }

    public function destroy(Request $request)
    {
        $redrectTo = $request->query('redirect_to',route('calligraphies.index'));
        $CalligraphyID = $request->calligraphy_id;
        $calligraphy = Calligraphy::findOrFail($CalligraphyID);
        $calligraphy->delete();
        Alert::success('Success', 'Calligraphy category succesfully deleted!')->buttonsStyling(false)->autoClose(2500);
        return redirect($redrectTo);
    }
}
