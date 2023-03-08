<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackPostRequest;
use App\Http\Requests\FeedbackPutRequest;
use App\Models\Calligraphy;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('admin.feedback.index', [
            'feedback' => Feedback::paginate(5)
        ]);
    }

    public function create()
    {
        return view('admin.feedback.create', [
            'users' => User::all(),
            'calligraphies' => Calligraphy::all()
        ]);
    }

    public function store(FeedbackPostRequest $request)
    {
        $validated = $request->validated();
        Feedback::create($validated);
        Alert::success('Success', 'New feedback succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('feedback.index'));
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.feedback.edit', [
            'feedback' => $feedback,
            'users' => User::all(),
            'calligraphies' => Calligraphy::all()
        ]);
    }

    public function update(FeedbackPutRequest $request, Feedback $feedback)
    {
        $validated = $request->validated();
        $feedback->update($validated);
        Alert::success('Success', 'Feedback succesfully updated!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('feedback.index'));
    }

    public function destroy(Request $request)
    {
        $FeedbackID = $request->feedback_id;
        $feedback = Feedback::findOrFail($FeedbackID);
        $feedback->delete();
        Alert::success('Success', 'Feedback succesfully deleted!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('feedback.index'));
    }
}
