<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Art;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index(){
        $users = User::withCount('art')
            ->orderByDesc('art_count')
            ->get();

        return view('artists.index', [
            'users' => $users,
        ]);
    }
    
}
