<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Musician;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $user = Auth::user();
        $musician = Musician::where('user_id', Auth::id())->first();
        // return Musician::where('user_id', Auth::id())->first();

        return view('admin.welcome', compact('musician', 'user')); 
    }
}