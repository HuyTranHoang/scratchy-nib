<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Http\Requests\UserPutRequest;
use App\Models\CalligraphyCategory;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all(),
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(UserPostRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($request -> password);
        User::create($validated);
        Alert::success('Success', 'New user succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('users.index'));
    }

    public function show(User $user)
    {
        abort('404');
    }

    public function edit(User $user)
    {
        //
        return view('admin.users.edit',['user' => $user]);
    }

    public function update(UserPutRequest $request, User $user)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($request -> password);
        $user->update($validated);
        Alert::success('Success', 'Update user succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('users.index'));
    }

    public function destroy(Request $request)
    {

        $userID = $request->users_id;
        $user = User::findOrFail($userID);
        $user->delete();
        Alert::success('Success', 'Delete succesfully deleted!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('users.index'));

    }
}
