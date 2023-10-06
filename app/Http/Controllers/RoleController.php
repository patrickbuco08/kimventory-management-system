<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){

        return view('role.roles');
    }

    public function list(){

        $posts = Role::get();

        return view('role.list', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Role::create([
            'name' => $request->name,
        ]);

        return back();
    }
}
