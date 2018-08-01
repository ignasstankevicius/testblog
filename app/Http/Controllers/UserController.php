<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function delete(){

        $user = auth()->user();

        $user->delete();

        return redirect()->route('index');
    }

    public function showall(){

        $users = User::all();

        return view('showall', [
            'users' => $users
        ]);
    }
}
