<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\User;

class ArtController extends Controller
{
    public function index(){

        $art = Art::latest()->get();

        return view('art.index', [
            'arts' => $art
        ]);
    }

    public function show($id){
        $arts = Art::latest()->get();
        $art = Art::findOrFail($id);
        $artByAuthor = Art::where('user_id', $art->user_id)->get();
        $user = User::findOrFail($art->user_id);
        return view('art.show', [
            'arts' => $arts,
            'art' => $art,
            'artByAuthor' => $artByAuthor,
            'user' => $user
        ]);
    }

    public function create(){
        return view('art.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:2|max:70',
            'description' => 'required|min:12|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $newArtImage = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('Art Images'), $newArtImage);


        Art::create([
            'title' => $request->input('title'),
            'desc' => $request->input('description'),
            'img' => $newArtImage,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('profile', auth()->id());

    }
    public function edit($id){
        $art = Art::findOrFail($id);
        return view('art.edit', [
            'art' => $art
        ]);
    }
    public function update(Request $request ,$id){
        $request->validate([
            'title' => 'required|min:2|max:70',
            'description' => 'required|min:12|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $newArtImage = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path("Art Images"), $newArtImage);

        Art::where('id', $id)->update([
            'title' => $request->input('title'),
            'desc' => $request->input('description'),
            'img' => $newArtImage
        ]);

        return redirect()->route("profile", auth()->id());

    }

    public function delete($id){
        Art::where('id', $id)->delete();
        return redirect()->route("profile", auth()->id());
    }
}
