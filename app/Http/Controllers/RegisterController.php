<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:30'],
            'username' => ['required','unique:users','min:3','max:20'],
            'email' => ['required','unique:users,email','max:30'],
            'password'=>['required']
        ]);
    }
}
