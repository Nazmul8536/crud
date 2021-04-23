<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except',['blogPage']]);
    }

    public function index(){
        return view('index');
    }
    public function blogPage(){
        return view('blogs.index')->with('posts',DB::select(DB::raw('select posts.*,users.* from posts left join users on
        posts.user_id = users.id')));
    }
}
