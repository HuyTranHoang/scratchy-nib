<?php

namespace App\Http\Controllers;

use App\Models\Calligraphy;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('admin.feedback.index',[
            'feedback' => Feedback::all()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Feedback $feedback)
    {
    }

    public function edit(Feedback $feedback)
    {
    }

    public function update(Request $request, Feedback $feedback)
    {
    }

    public function destroy(Feedback $feedback)
    {
    }
}
