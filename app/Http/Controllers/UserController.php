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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserPostRequest $request)
    {
        //

        $validated = $request->validated();
        User::create([
            'name' => $request->users_name,
            'email' => $request->users_email,
            'password' => Hash::make($request->users_password),
        ]);
        Alert::success('Success', 'New user succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('admin.users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserPutRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->update([
            'name' => $request->users_name,
            'email' => $request->users_email,
            'password' => Hash::make($request->users_password),
        ]);
        Alert::success('Success', 'update user succesfully added!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
//        dd($request->users_id);
        $userID = $request->users_id;
        $user = User::findOrFail($userID);
        $user->delete();
        Alert::success('Success', 'delete succesfully deleted!')->buttonsStyling(false)->autoClose(1500);
        return redirect(route('users.index'));

    }
}
