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

    private int $perPage = 10;
    public function index()
    {
        if (request()->perPage) {
            $this->perPage = request()->perPage;
            if ($this->perPage != 10 && $this->perPage != 15 && $this->perPage != 20){
                $this->perPage = 10;
            }
        }
        $page = request()->input('page', 1);
        $totalItems = User::filter(request(['userFilter','roleID']))->count();
        $totalPages = ceil($totalItems / $this->perPage);

        if ($page > $totalPages && $totalItems != 0) {
            Alert::error('Oops', "Look like the page you try to enter don't exist anymore, redirect to first page")->buttonsStyling(false)->autoClose(2500);
            return redirect(route('users.index',['page'=> 1]));
        }

        return view('admin.users.index', [
            'users' => User::filter(request(['userFilter','roleID','orderby','sort']))->paginate($this->perPage)->appends(request()->query()),
            'roles' => Role::all()
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
        $lastPage = User::paginate($this->perPage)->lastPage();
        Alert::success('Success', 'New user succesfully added!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('users.index' ,['page' => $lastPage]));
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
        $redirectTo = $request->query('redirect_to',route('users.index'));
        $userID = $request->user_id;
        $user = User::findOrFail($userID);
        $user->delete();
        Alert::success('Success', 'Delete succesfully deleted!')->buttonsStyling(false)->autoClose(2500);
        return redirect($redirectTo);

    }
}
