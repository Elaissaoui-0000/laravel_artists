<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id){

        $user = User::where("id",$id)->first();
        
        return view('profile.index', [
            'user' => $user
        ]);
    }

    public function edit($id){

        $user = User::where('id', $id)->first();

        return view('profile.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|max:100',
            'mobile' => 'required|min:8|max:24|unique:users',
            'description' => 'required|min:12|max:100',
            'birthday' => 'required|date|before:01/01/2011',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $newProfileImage = uniqid() .  '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('Profile Images'), $newProfileImage);

        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'desc' => $request->input('description'),
            'birth' => $request->input('birthday'),
            'img' => $newProfileImage,
        ]);

        return redirect()->route('profile', auth()->id());
    }

    public function editSocial($id){
        $user = User::find($id);
        $social = SocialMedia::findOrFail($user->social->id);
        return view('profile.editSocial', [
            'social' => $social
        ]);
    }
    public function updateSocial(Request $request ,$id){
        $request->validate([
            'instagrame' => 'url|required_without:twitter,facebook',
            'twitter' => 'url|required_without:instagrame,facebook',
            'facebook' => 'url|required_without:instagrame,twitter',
        ]);

        SocialMedia::where('id', $id)->update([
            'instagrame' => $request->input('instagrame'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
        ]);
        return redirect()->route('profile', auth()->id());
    }
}
