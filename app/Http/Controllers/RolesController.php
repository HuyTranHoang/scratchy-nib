<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolePostRequest;
use App\Http\Requests\RolePutRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RolesController extends Controller
{
    public function index()
    {
        return view('admin.roles.index', [
            'roles' => Role::filter(request(['roleName']))->paginate(10)->appends(request()->query())
        ]);
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(RolePostRequest $request)
    {
        $validated = $request->validated();
        Role::create($validated);
        Alert::success('Success', 'New role succesfully added!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('roles.index'));
    }

    public function show() {
        abort('404');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', [
            'role' => $role
        ]);
    }

    public function update(RolePutRequest $request, Role $role)
    {
        $validated = $request->validated();
        $role->update($validated);
        Alert::success('Success', 'Role succesfully updated!')->buttonsStyling(false)->autoClose(2500);
        return redirect(route('roles.index'));
    }

    public function destroy(Request $request)
    {
        $redrectTo = $request->query('redirect_to',route('roles.index'));
        $RoleID = $request->role_id;
        $role = Role::findOrFail($RoleID);
        $role->delete();
        Alert::success('Success', 'Calligraphy category succesfully deleted!')->buttonsStyling(false)->autoClose(2500);
        return redirect($redrectTo);
    }
}
