<?php

namespace App\Http\Controllers\tours;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ToursController extends Controller
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
        $dataList = DB::table('tours')
            ->where('tours.deleted', 0)
            ->orderBy('updated_at', 'desc')
            ->paginate(10);

        return view('tours.index')->with([
            'index' => 0,
            'dataList' => $dataList
        ]);
    }

    public function view(Request $request) {
        $toursItem = null;
        if(isset($request->id) && $request->id > 0) {
            $toursItem = DB::table('tours')
                ->where('id', $request->id)
                ->get();
            if($toursItem != null && count($toursItem) > 0) {
                $toursItem = $toursItem[0];
            } else {
                $toursItem = null;
            }
        }

        return view('tours.view')->with([
            'toursItem' => $toursItem
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

            DB::table('tours')
                ->where('id', $id)
                ->update($data);
        } else {
            $slug = getSlug($title);

            DB::table('tours')->insert([
                'title' => $title,
                'content' => $content,
                'thumbnail' => $thumbnail,
                'href_param'  => $slug,
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->route('tours.index');
    }

    public function delete(Request $request) {
        $id = $request->id;

        DB::table('tours')
            ->where('id', $id)
            ->update([
                'deleted' => 1
            ]);

        return redirect()->route('tours.index');
    }
}
