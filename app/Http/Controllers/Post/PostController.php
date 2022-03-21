<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Resources\Json\Resource;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $input=$request->validate([
            'title'=>'required',
            'content'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        print_r($input);

        $post=new Post;
        $post->title=request('title');
        $post->content=request('content');
        $post->description=request('description');
        $post-> image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $post->image);

        $post->save();
        return redirect('create')->with('success', 'post is stored in successfully')->with('image', $post->image);
    }

    public function all_post()
    {
        $posts = DB::table('posts')->paginate(5);
        $message="view";
        return view('post.show', compact('posts', 'message'));
    }

    public function viewpost($id)
    {
        $post=Post::findOrFail($id);
        return view('post.view', compact("post"));
    }
    public function edit($id)
    {
        $post=Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post= Post::findOrFail($id);
        $post->title=request('title');
        $post->content=request('content');
        $post->description=request('description');
        $post->image=request()->file('image')->store('public/images');
        $post->save();
        return redirect(route('index'))->with('success', 'post is update successfully');
        ;
    }
    public function Delete($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return back()->with('success', ''.$id.'post is Delete in successfully');
    }
    public function Truncate($id)
    {
        $post=Post::findOrFail($id);
        $post->truncate();
        return back()->with('success', ''.$id.' Delete alll successfully');
    }
}
