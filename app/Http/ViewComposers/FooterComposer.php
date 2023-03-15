<?php
namespace App\Http\ViewComposers;
use App\Models\Visitor;
use Illuminate\View\View;


class FooterComposer {
    public function compose(View $view) {
        $visitorCount = Visitor::sum('view');

        $view -> with('visitorCount',$visitorCount);
    }
}
