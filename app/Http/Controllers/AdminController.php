<?php

namespace App\Http\Controllers;

use App\Models\Calligraphy;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalUsers' => User::count(),
            'totalVisitors' => Visitor::sum('view'),
            'totalCalligraphy' => Calligraphy::count(),
            'totalFeedback' => Feedback::count(),
            'feedback' => Feedback::latest()->limit(4)->get(),
            'users' => User::latest()->limit(6)->get()
        ]);
    }

    public function removeEmptyParameters(Request $request)
    {
        $queryString = $request->getQueryString();
        parse_str($queryString, $params);

        foreach ($params as $key => $value) {
            if (empty($value)) {
                unset($params[$key]);
            }
        }
        $newQueryString = http_build_query($params);

        return redirect()->to(URL::previousPath() . '?' . $newQueryString);
    }
}
