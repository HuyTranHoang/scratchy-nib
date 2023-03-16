<?php

namespace App\Http\Controllers;

use App\Models\Calligraphy;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Visitor;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalUsers' => User::count(),
            'totalVisitors' => Visitor::sum('view'),
            'totalCalligraphy' => Calligraphy::count(),
            'totalFeedback' => Feedback::count(),
            'feedback' => Feedback::latest()->limit(4)->get()
        ]);
    }
}
