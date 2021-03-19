<?php

namespace App\Http\Controllers\User;

use App\Models\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q ?? '';
        $t = $request->t ?? 0;

        $search = function ($query) use ($q){
            $query->where('title', 'like', "%$q%");
        };

        $type = function ($query) use ($t){
            if (!$t) {
                $query->where('author_id', auth()->user()->id);
            }
        };

        $posts = Posts::where('active', 1)
                    ->where($search)
                    ->where($type)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);

        return view('dashboard.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Posts();
        $posts->title = $request->get('title');
        $posts->body = $request->get('body');
        $posts->slug = Str::slug($posts->title);
        $posts->author_id = $request->user()->id;

        if ($request->has("save")) {
            $posts->active = false;
            $msg = 'Post has been saved successfully';
        }else{
            $posts->active = true;
            $msg = 'Post has been successfully Published';
        }

        $posts->save();
        return redirect('edit/' . $posts->slug)->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::where('id', $id)->first();
        if (!$post) {
            return redirect('dashboard/')->withErrors('Request page not Found');
        }
        $comments = $post->comments;
        return view('dashboard.posts.show',[
            'post' => $post,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "HI";
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
        return "HI";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "HI";
    }
}
