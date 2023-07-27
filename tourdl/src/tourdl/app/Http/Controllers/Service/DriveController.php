<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Drive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriveController extends Controller
{
    public function index(Request $request)
    {
        $drives = Drive::all();
        return view('service.drive.index', [
            'drives' => $drives
        ]);
    }

    public function create(Request $request)
    {
        return view('service.drive.editing');
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
            $drives = new Drive();
            $drives->name = $request->input('name');
            $drives->description = $request->input('description');
            $drives->save();
            alert()->success('Thêm vai trò thành công.', 'Successfully');
        }
        return redirect()->route('service.drive.index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $drives = Drive::find($id);

        $drives->delete();

        return redirect()->route('service.drive.index');
}
}
