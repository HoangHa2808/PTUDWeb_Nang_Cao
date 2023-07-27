<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Posts\Hotel;
use App\Models\Posts\News;
use App\Models\Posts\Tours;
use App\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $hotels = Hotel::count();
        $tours = Tours::count();
        $news = News::count();
        $categories = Category::count();
        $roles = Role::count();
        $feedbacks = Feedback::count();
        return view('dashboard.index', [
            'hotels' => $hotels,
            'tours' => $tours,
            'news' => $news,
            'categories' => $categories,
            'roles' => $roles,
            'feedbacks' => $feedbacks,
        ]);
    }
}
