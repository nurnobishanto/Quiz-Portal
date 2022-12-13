<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;
use Stephenjude\FilamentBlog\Models\Author;
use Stephenjude\FilamentBlog\Models\Category;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{

    public function index(){
        $posts = Post::all();
        $title = "Blog";
        if ($posts){
            SEOTools::setTitle($title." - ".setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            return view('front.blog',compact(['posts','title']));
        }else{
            abort(404);
        }
    }
    public function post($slug){
        $post = Post::where('slug',$slug)->first();
        $posts = Post::all()->take(3);
        $categories = Category::all();
        $tags = Tag::all();
        if($post){
            $post->update([
                'view' => $post->view + 1
            ]);
            SEOTools::setTitle($post->title);
            SEOTools::setDescription($post->exceprt);
            return view('front.blog_content',compact(['post','categories','tags','posts']));
        }else{
            abort(404);
        }
    }
    public function category($slug){
        $category = Category::where('slug',$slug)->first();
        if ($category){
            $title = $category->name;
            $posts = $category->posts;
            SEOTools::setTitle($title." - Category");
            return view('front.blog',compact(['posts','title']));
        }else{
            abort(404);
        }
    }
    public function author($id){
        $author = Author::where('id',$id)->first();
        if ($author){
            $title = $author->name;
            $posts = $author->posts;
            SEOTools::setTitle($title." - Author");
            return view('front.blog',compact(['posts','title']));
        }else{
            abort(404);
        }
    }
}
