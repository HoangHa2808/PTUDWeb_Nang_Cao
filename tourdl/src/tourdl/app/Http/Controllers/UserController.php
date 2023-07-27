<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create(Request $request)
    {
        return view('user.editing');
    }

    public function store(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'name' => 'required|max:191',
                'email' => 'required|max:191',
                'password' => 'required|max:191',
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
            $roles = new User();
            $roles->name = $request->input('name');
            $roles->email = $request->input('email');
            $roles->password = $request->input('password');
            $roles->save();
            alert()->success('Thêm người dùng thành công.', 'Successfully');
        }
        return redirect()->route('user.index');
    }
}
