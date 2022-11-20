<?php

namespace App\Http\Livewire;

use App\Models\WasteType;
use Livewire\Component;

class SelectClub extends Component
{
    public $clubsToPost;
    public $clubsId;
    protected $queryString = [
        'clubsToPost',

    ];

    public function render()
    {
        return view('livewire.select-club', [
            'club'=> WasteType::select('id','title','slug',)
//                ->paginate($this->perPage,['id','username','name'])
//                ->select('id','title','slug',)
                ->orderBy('title','asc')
                ->get(),

        ]);
    }
}
