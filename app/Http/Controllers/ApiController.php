<?php

namespace App\Http\Controllers;

use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function categories()
    {
        $data = CalligraphyCategory::select(['category_id','category_name'])->get();
        return $data;
    }

    public function styles(Request $request)
    {
        $data = CalligraphyStyle::select(['style_id','style_name'])->where('category_id',$request->category_id)->get();
        return $data;
    }
}
