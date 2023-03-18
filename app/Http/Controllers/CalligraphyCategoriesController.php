<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryPostRequest;
use App\Http\Requests\CategoryPutRequest;
use App\Models\CalligraphyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class CalligraphyCategoriesController extends Controller
{
    private int $perPage = 5;

    public function index()
    {

        $page = request()->input('page', 1);
        $totalItems = CalligraphyCategory::filter(request(['cateName']))->count();
        $totalPages = ceil($totalItems / $this->perPage);

        if ($page > $totalPages && $totalItems != 0) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('categories.index',['page'=> 1]));
        }

        return view('admin.categories.index', [
            'categories' => CalligraphyCategory::filter(request(['cateName','orderby','sort']))->paginate($this->perPage)->appends(request()->query())
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryPostRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('category_image')) {
            $validated['category_image'] = $request->file('category_image')->store('uploads/cateImages', 'public');
        }

        CalligraphyCategory::create($validated);
        $lastPage = CalligraphyCategory::paginate($this->perPage)->lastPage();
        Alert::success('Success', 'New calligraphy category succesfully added!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('categories.index', ['page' => $lastPage]));
    }

    public function show() {
        abort('404');
    }

    public function edit(CalligraphyCategory $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
        ]);
    }

    public function update(CategoryPutRequest $request, CalligraphyCategory $category)
    {
        $validated = $request->validated();

        if ($request->hasFile('category_image')) {
            $oldImageName = 'storage/' . $category->category_image;
            if ($oldImageName != 'storage/uploads/cateImages/noImage.jpg') {
                File::delete($oldImageName);
            }
            $validated['category_image'] = $request->file('category_image')->store('uploads/cateImages', 'public');
        }

        $category->update($validated);
        Alert::success('Success', 'Calligraphy category succesfully updated!')->buttonsStyling(false)->autoClose(2500);

        return redirect(route('categories.index'));
    }

    public function destroy(Request $request)
    {
        $redirectTo = $request->query('redirect_to',route('categories.index'));
        $CateID = $request->category_id;
        $category = CalligraphyCategory::findOrFail($CateID);
        $oldImageName = 'storage/' . $category->category_image;
        if ($oldImageName != 'storage/uploads/cateImages/noImage.jpg') {
            File::delete($oldImageName);
        }
        $category->delete();
        Alert::success('Success', 'Calligraphy category succesfully deleted!')->buttonsStyling(false)->autoClose(2500);

        return redirect($redirectTo);
    }
}
