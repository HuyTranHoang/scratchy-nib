<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalligraphyPostRequest;
use App\Http\Requests\CalligraphyPutRequest;
use App\Models\Calligraphy;
use App\Models\CalligraphyStyle;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $calligraphy = Calligraphy::create($validated);
        if ($request->hasFile('image')) {
            $image['image_name'] = $request->file('image')->store('uploads', 'public');
            $image['calligraphy_id'] = $calligraphy->calligraphy_id;
            GalleryImage::create($image);
        }
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
        if ($request->hasFile('image')) {
//            if (count($calligraphy -> galleryImage) >= 2) {
//                foreach ($calligraphy -> galleryImage as $image) {
//                    $oldImageName[] = 'storage/' . $image -> image_name;
//                }
//            } elseif (count($calligraphy -> galleryImage) == 1) {
//                $oldImageName[] = 'storage/' . $calligraphy -> galleryImage ->first() -> image_name;
//            }
            $oldImageName = 'storage/' . $calligraphy->galleryImage->first()->image_name;
            File::delete($oldImageName);
            GalleryImage::where('calligraphy_id', $calligraphy->calligraphy_id)->delete();
            $image['image_name'] = $request->file('image')->store('uploads', 'public');
            $image['calligraphy_id'] = $calligraphy->calligraphy_id;
            GalleryImage::create($image);
        }

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
