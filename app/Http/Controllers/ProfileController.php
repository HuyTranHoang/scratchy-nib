<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $request->user()->bio = $request->bio;
        $request->user()->facebook = $request->facebook;
        $request->user()->twitter = $request->twitter;

        if ($request->hasFile('avatar')) {

            if ($request->user()->avatar != 'avatar/noAvatar.jpg') {
                $oldImageName = 'storage/' . $request->user()->avatar;
                File::delete($oldImageName);
            }
            $request->user()->avatar = $request->file('avatar')->store('avatar', 'public');
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();


        Alert::toast("Your profile information is saved!!", 'success')->autoClose(2500);
        return Redirect::route('profile.edit');
    }

    public function showUser(User $user){
        return view('profile.show', [
            'user' => $user
        ]);
    }
}
