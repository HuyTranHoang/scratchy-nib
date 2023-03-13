<?php
namespace App\Http\ViewComposers;
use App\Models\CalligraphyCategory;
use Illuminate\View\View;


class HeaderComposer {
    public function compose(View $view) {
        $categories = CalligraphyCategory::all();

        $view -> with('categories',$categories);
    }
}
