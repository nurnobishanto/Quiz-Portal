<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        Comment::create($input);
        return redirect()->back()->with([
            'success' => 'Comment Submit Successfully',
            'message' => 'Comment Submit Successfully'
        ]);
    }
}
