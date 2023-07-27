<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all();
        return view('service.order.index', [
            'orders' => $orders
        ]);
    }

    public function create(Request $request)
    {
        return view('service.order.editing');
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
            $orders = new Order();
            $orders->name = $request->input('name');
            $orders->description = $request->input('description');
            $orders->save();
            alert()->success('Thêm vai trò thành công.', 'Successfully');
        }
        return redirect()->route('service.order.index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $orders = Order::find($id);

        $orders->delete();

        return redirect()->route('service.order.index');
}
}
