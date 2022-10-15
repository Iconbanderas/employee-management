<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangepasswordController extends Controller
{
    public function changepassword(Request $request, User $user){ 
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.index')->with(['message' => 'User password updated successfully']);
    }   
}
