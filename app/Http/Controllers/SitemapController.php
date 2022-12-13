<?php

namespace App\Http\Controllers;

use App\Models\ExamCategory;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Author;
use Stephenjude\FilamentBlog\Models\Category;
use Stephenjude\FilamentBlog\Models\Post;

class SitemapController extends Controller
{


    public function index(Request $r)
    {

        $posts = Post::orderBy('id', 'desc')->get();
        $subjects = Subject::orderBy('id', 'desc')->get();
        $ecats = ExamCategory::orderBy('id', 'desc')->get();
        $quizzes = Quiz::orderBy('id', 'desc')->get();
        $cats = Category::all();
        $authors =  Author::all();
        return response()->view('sitemap', compact(['posts','subjects','ecats','quizzes','cats','authors']))
            ->header('Content-Type', 'text/xml');

    }
}
