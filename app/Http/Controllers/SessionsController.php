<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {
    
    public function create() {
        return view('auth.login');
    }

    public function store() {

        if (auth()->attempt(request(['email', 'password']))) {
           
            return redirect()->route('index');
        } else {
        
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);
        }
    }
    
    public function destroy() {
 
        auth()->logout();

        return redirect()->to('/');
    }
}
