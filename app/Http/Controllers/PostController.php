<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');

    }

//    public function createPost(Request $request)
//    {
//        if (auth()->guest()) {
//            abort(Response::HTTP_FORBIDDEN);
//        }
//
////        $this->validate();
//
//        $post = Post::create([
//            'user_id' => auth()->id(),
//            'title' => $request->input('title'),
//            'description' => $request->input('content'),
//        ]);
//
//        $post->vote(auth()->user());
//
//        session()->flash('success_message', 'Post was added successfully!');
//
////        $this->reset();
//
//        return redirect()->route('post.index');
//    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Comment $comment)
    {
        return view('post.show', [
            'post' => $post,
//            'votesCount' => $post->votes()->count(),
//            'spamPostsCount' => $post->spamPosts()->count(),
            'spamCommentsCount' => $comment->spamComments()->count(),
            'backUrl' => url()->previous() !== url()->full() && url()->previous() !== route('login')
                ? url()->previous()
                : route('post.index'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostsRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostsRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function img_upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $filenamewithextension= $request->file('upload')->getClientOriginalName();


            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);


            $extension = $request->file('upload')->getClientOriginalExtension();


            $filenametostore = $filename.'_'.time().'.'.$extension;


            $request->file('upload')->storeAs('public/profile-photos/', 'a-uploads-'.$filenametostore);

            if ( round(filesize(public_path('storage/profile-photos/a-uploads-'.$filenametostore)) / 1024, 2) > 200)
            {
                $filePath = public_path('storage/profile-photos/a-uploads-'.$filenametostore);
                $img = Image::make($filePath)
                    ->resize(900, 900, function($constraint) {
                        $constraint->aspectRatio();
                    });
                $img->save($filePath);
            }




            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize( public_path('storage/profile-photos/a-uploads-'.$filenametostore));

            echo json_encode([
                'default' => asset('storage/profile-photos/a-uploads-'.$filenametostore),
//                '500' => asset('storage/profile-photos/uploads/thumbnail/'.$filenametostore)
            ]);
        }

    }


    public function saved()
    {
        return view('post.saved');
    }

}
