<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Auth;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except',['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $newImage = uniqid().'_'.$request->title.'.'.$request->image->extension();
        $request->image->move(public_path('images') , $newImage);
        $slug = SlugService::createSlug(Post::class,'slug',$request->title);
        Post::create([
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'slug'          => $slug,
            'image_path'    => $newImage,
            'user_id'       => auth()->user()->id,
        ]);
        return redirect('/blogs')->with('message','New Post Has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blogs.blogs_show')->with([
            'posts' => DB::table('posts as a')
                ->select('a.id','a.slug','a.title','a.image_path','a.description','b.name','a.created_at')
                ->leftjoin('users as b','b.id','a.user_id')
                ->where('a.slug',$slug)->first(),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blogs.post_edit')->with([
           'edit_blogs' => DB::table('posts')->where('slug',$slug)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $slug = SlugService::createSlug(Post::class,'slug',$request->title);
        Post::where('slug',$id)->update([
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'slug'          => $slug,
            'user_id'       => auth()->user()->id,
        ]);
        return redirect('/blogs')->with('message','New Post Has been Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('slug',$id);
        $post->delete();
        return redirect('/blogs')->with('message','data deleted successfully');
    }
}
