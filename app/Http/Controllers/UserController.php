<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        return view('user.index', compact('users'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        User::create([
            'nrp' => $request->nrp,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
        ]);
        
        return redirect()->route('user.index');
    }
    
    public function update($id) {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    public function edit(Request $request, $id) {
        $user = User::find($id);
        
        $user->update([
            'nrp' => $request->nrp,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
        ]);
        
        return redirect()->route('user.index');
    }

    public function delete($id) {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('user.index');
    }
}
