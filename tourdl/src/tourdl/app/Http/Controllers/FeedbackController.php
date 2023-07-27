<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $feedbacks = Feedback::all();
        return view('feedback.index', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $feedback = Feedback::find($id);

        $feedback->delete();

        return redirect()->route('feedback.index');
       
    }
}
