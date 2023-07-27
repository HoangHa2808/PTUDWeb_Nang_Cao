<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        return view('role.index', [
            'roles' => $roles
        ]);
    }

    public function create(Request $request)
    {
        return view('role.editing');
    }

    public function store(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:191',
            ],
            [
                'required'  => 'Bạn phải điền :attribute',
            ]

        );
        if ($validated->fails()) {
            alert()->success([
                'status' => 400,
                'errors' => $validated->messages(),
            ]);
        } else {
            $roles = new Role();
            $roles->name = $request->input('name');
            $roles->description = $request->input('description');
            $roles->save();
            alert()->success('Thêm vai trò thành công.', 'Successfully');
        }
        return redirect()->route('role.index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $role = Role::find($id);

        $role->delete();

        return redirect()->route('role.index');

    }
}
