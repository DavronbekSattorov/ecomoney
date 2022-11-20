<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Http\Response;
use Livewire\Component;

class EditPost extends Component
{
    public $post;
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|min:4',
    ];
    protected $listeners = ['loadCkePostEdit' => 'loadCke'];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->description = $post->description;
    }

    public function updatePost()
    {
        if (auth()->guest() || auth()->user()->cannot('update', $this->post)) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();
        $pattern = "/<p[^>]*>[\s|&nbsp;]*<\/p>/";
        $this->description = preg_replace($pattern, '', $this->description);
//        $find = ['/^((?:&nbsp;|\s)+)|(?1)$/', '/\s*&nbsp;(?:\s*&nbsp;)*\s*/', '/\s+/'];
//        $replace = ['', '&nbsp;',' '];
//        $this->description = preg_replace($find, $replace, trim($this->description));

        $this->post->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->emit('postWasUpdated');
    }
    public function loadCke()
    {
        $this->dispatchBrowserEvent('loadCkePostEdit', []);
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}
