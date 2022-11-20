<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\WasteType;
use App\Models\Post;
//use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithAuthRedirects,WithFileUploads;

    public $title;
    public $description;
    public $search;
    public $wasteTypesId;
    public $wasteTypesToPost;
    public $wasteImages;
    public $file;
    public $option = 'buy';
    public $location;
    public $price;
    public $wasteTypes=['paper'];


    protected $rules = [
        'title' => 'min:4|required',
//        'wasteTypesId'=>'required|exists:waste_types,slug',
        'file'=>'image|max:10000',
        'location'=>'required'
    ];
    protected $queryString = [
        'title',
        'wasteTypesToPost',
        'option'

    ];
    protected $listeners = [
//        'loadCke' => 'loadCke',
        'queryStringUpdatedStatus',];
    public function mount(){
        $this->wasteTypesId = $this->wasteTypesToPost;  // otherwise "selected" won't work
    }


    public function createPost( Request $request)
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();
        $pattern = "/<p[^>]*>[\s|&nbsp;]*<\/p>/";
        $this->description = preg_replace($pattern, '', $this->description);
//        $find = ['/^((?:&nbsp;|\s)+)|(?1)$/', '/\s*&nbsp;(?:\s*&nbsp;)*\s*/', '/\s+/'];
//        $replace = ['', '&nbsp;',' '];
//        $this->description = preg_replace($find, $replace, trim($this->description));

        $post = Post::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'description' => $this->description,
            'option'=>$this->option,
            'location'=>$this->location ?? $request->input('location'),
            'price'=>$this->price,
            'image'=>$this->file
        ]);
        if ($this->wasteTypesId !== 'not-selected')
        {
            $wasteType = WasteType::where('slug',$this->wasteTypesId)->first();
            if ($wasteType)
            {
                $post->wasteTypes()->attach( $wasteType->id);
            }
        }

//        $post->vote(auth()->user());

        session()->flash('success_message', 'Product was added successfully!');

        $this->reset();

        return redirect()->route('post.index');
    }

//    public function loadCke()
//    {
//        $this->dispatchBrowserEvent('loadCke', []);
//    }


    public function render()
    {
        return view('livewire.create-post'
            , [
                'wasteTypes'=> WasteType::select('id','title','slug',)
//                ->paginate($this->perPage,['id','username','name'])
//                ->select('id','title','slug',)
                    ->orderBy('title','asc')
                    ->get(),

            ]
        );
    }

}
