<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }
    public function create()
    {
        return view('login.create');
    }
    public function store()
    {
        if (
            !auth()->attempt(
                request(['email', 'password'])
            )
        ) {
            return back()->withErrors([
                'message' => 'Incorrect email or password'
            ]);
        }
        return redirect('/teams');
    }
    public function verification($id)
    {
        $user = User::find($id);
        $user->is_verified = true;
        $user->save();

        return view('login.verification', compact('user'));
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/teams');
    }
}
