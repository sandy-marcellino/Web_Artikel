<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        //$data_posts = Post::all();
        $data_posts = Post::latest();

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama;

        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;

        }

        return view('blog', [
            "title" => "All Post" . $title,
            "active" => "Blog",
            "posts" => $data_posts->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
        //return $data_post;
    }

    public function show($id)
    {
        $data_post = Post::find($id);
        return view('post', [
            "title" => $data_post,
            "post" => $data_post
        ]);    
    }

    public function showMenggunakanBinding(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "active" => "Blog",
            "post" => $post
        ]);    
    }
    
}
