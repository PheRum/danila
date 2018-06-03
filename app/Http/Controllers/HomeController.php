<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = request('id', auth()->id());

        $data = User::with('city')->findOrFail($id);

        return view('home', compact('data'));
    }
}
