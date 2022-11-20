<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $createPost = route('create-post');
        if(request()->route()->uri == 'club/{club}')
        {
            $url = request()->url();
            $createPost = substr($url, strpos($url, 'club') + 6);
            route('create-post').'?clubsToPost='.$createPost;
        }
        return view('layouts.app',[
            'createPostLink'=>$createPost,
        ]);
    }
}
