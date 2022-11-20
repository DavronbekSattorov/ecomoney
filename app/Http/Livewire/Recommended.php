<?php

namespace App\Http\Livewire;

use App\Models\WasteType;
use App\Models\Post;
use App\Models\Save;
use App\Models\SpamPosts;
use App\Models\Vote;
use Livewire\Component;

class Recommended extends Component
{
    public function render()
    {
        return view('livewire.recommended',[
//            'rec_posts' => Post::with('user')
////                ->withCount('votes')
//                ->withCount('comments')
//                ->orderByDesc('votes_count')
//                ->orderBy('id', 'desc')
//                ->limit(8),
////                ->get(),
            'rec_waste_types'=>WasteType::select('id','title','slug','profile_photo_path')
                ->withCount('members')
                ->orderByDesc('members_count')
                ->limit(7)
                ->get(),
        ]);
    }
}
