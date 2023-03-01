<?php

namespace App\Http\Controllers;

use App\Models\Calligraphy;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImagesController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index',[
            'gallery' => GalleryImage::all()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(GalleryImage $galleryImage)
    {
    }

    public function edit(GalleryImage $galleryImage)
    {
    }

    public function update(Request $request, GalleryImage $galleryImage)
    {
    }

    public function destroy(GalleryImage $galleryImage)
    {
    }
}
