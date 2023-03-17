<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserPostRequest;
use App\Http\Requests\UserPutRequest;
use App\Models\CalligraphyCategory;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $perPage = 10;
        $page = request()->input('page', 1);
        $totalItems = User::filter(request(['userFilter']))->count();
        $totalPages = ceil($totalItems / $perPage);

        if ($page > $totalPages && !request()->userFilter) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('users.index',['page'=> 1]));
        }

        return view('admin.users.index', [
            'users' => User::filter(request(['userFilter','orderby','sort']))->paginate($perPage)->appends(request()->query())
        ]);
    }

    public function create()
    {
        return view('admin.users.create', [
            'roles' => Role::all()
        ]);
    }


    public function store(UserPostRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($request -> password);
        User::create($validated);
        Alert::success('Success', 'New user succesfully added!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('users.index'));
    }

    public function show(User $user)
    {
        abort('404');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => Role::all()
        ]);
    }

    public function update(UserPutRequest $request, User $user)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($request -> password);
        $validated['bio'] = $request->bio;
        $validated['facebook'] = $request->facebook;
        $validated['twitter'] = $request->twitter;

        if ($request->hasFile('avatar')) {
            if ($user->avatar != 'avatar/noAvatar.jpg') {
                $oldImageName = 'storage/' . $user->avatar;
                File::delete($oldImageName);
            }
            $validated['avatar'] = $request->file('avatar')->store('avatar', 'public');
        }

        $user->update($validated);
        Alert::success('Success', 'Update user succesfully added!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('users.index'));
    }

    public function destroy(Request $request)
    {
        $redrectTo = $request->query('redirect_to',route('users.index'));
        $userID = $request->user_id;
        $user = User::findOrFail($userID);
        $user->delete();
        Alert::success('Success', 'Delete succesfully deleted!')->buttonsStyling(false)->autoClose(2500);
        return redirect($redrectTo);

    }
}
