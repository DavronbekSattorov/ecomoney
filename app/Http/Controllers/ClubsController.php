<?php

namespace App\Http\Controllers;

use App\Models\WasteType;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Image;

class ClubsController extends Controller
{
    public function create()
    {
        if (!auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('club.create');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $request->validate([
            'title' => 'bail|required|unique:clubs|max:255',
            'about' => 'required|max:255',
            'profile_photo_path' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5024'],
        ]);


        $club = WasteType::create([
            'title' => trim($request->input('title')),
            'about' => trim($request->input('about')),
        ]);
        if(isset($request['profile_photo_path'])) {
            $extension = $request['profile_photo_path']->getClientOriginalExtension();
            $img = Image::make($request['profile_photo_path'])
                ->resize(300,300 , function($constraint) {
                    $constraint->aspectRatio();
                });
            $img->save($img->dirname.'/'.$img->basename);
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize( $img->dirname.'/'.$img->basename);
            $club->updateProfilePhoto($request['profile_photo_path']);
        }


        session()->flash('success_message', 'WasteType was created successfully!');


        return redirect()->route('club.show',$club);

    }
    public function show(WasteType $club)
    {
        $posts = $club->posts;

        return view('club.show',[
            'posts'=>$posts,
            'club'=>$club,
            'actionsCount'=>[
                'postsCount'=>$club->posts()->count(),
                'membersCount'=>$club->members()->count(),
            ]
        ]);
    }
    public function edit(WasteType $club)
    {
        if (!auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return view('club.edit',[
            'club'=>$club,
        ]);
    }
    public function update(Request $request, WasteType $club)
    {
        if (!auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $formFields = $request->validate([
            'title'=>'required',
            'about'=>'required',
            'profile_photo_path' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5024'],
        ]);

        if(isset($request['profile_photo_path'])) {
            $extension = $request['profile_photo_path']->getClientOriginalExtension();
            $img = Image::make($request['profile_photo_path'])
                ->resize(300,300 , function($constraint) {
                    $constraint->aspectRatio();
                });
            $img->save($img->dirname.'/'.$img->basename);
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize( $img->dirname.'/'.$img->basename);
            $club->updateProfilePhoto($request['profile_photo_path']);
        }

        $club->update($formFields);

        session()->flash('success_message', 'WasteType was updated successfully!');

        return redirect()->route('club.show',$club);

    }
}
