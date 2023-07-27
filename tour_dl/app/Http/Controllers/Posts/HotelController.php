<?php

namespace App\Http\Controllers\hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HotelController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkPermission');
    }

    public function index(Request $request) {
        $dataList = DB::table('hotel')
            ->where('hotel.deleted', 0)
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('hotel.index')->with([
            'index' => 0,
            'dataList' => $dataList
        ]);
    }

    public function view(Request $request) {
        $hotelItem = null;
        if(isset($request->id) && $request->id > 0) {
            $hotelItem = DB::table('hotel')
                ->where('id', $request->id)
                ->get();
            if($hotelItem != null && count($hotelItem) > 0) {
                $hotelItem = $hotelItem[0];
            } else {
                $hotelItem = null;
            }
        }

        return view('hotel.view')->with([
            'hotelItem' => $hotelItem
        ]);
    }

    public function add(Request $request) {
        $title = $request->title;
        $content = $request->content;
        $thumbnail = $request->thumbnail;
        $id = $request->id;

        if(isset($id) && $id > 0) {
            $data = [
                'title' => $title,
                'content' => $content,
                'thumbnail' => $thumbnail,
                'updated_at' => date('Y-m-d H:i:s')
            ];

            DB::table('hotel')
                ->where('id', $id)
                ->update($data);
        } else {
            $slug = getSlug($title);

            DB::table('hotel')->insert([
                'title' => $title,
                'content' => $content,
                'thumbnail' => $thumbnail,
                'href_param'  => $slug,
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->route('hotel.index');
    }

    public function delete(Request $request) {
        $id = $request->id;

        DB::table('hotel')
            ->where('id', $id)
            ->update([
                'deleted' => 1
            ]);

        return redirect()->route('hotel.index');
    }
}
