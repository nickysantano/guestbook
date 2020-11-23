<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthActivationController extends Controller
{
    public function activate(Request $request){
        $user = User::where('email', $request->email)->where('activation_token', $request->token)->firstOrFail();
        $user->update([
            'activation_token' => null,
            'email_verified_at' => Carbon::now(),
            'is_active' => '1',
            'is_verified' => '1',
        ]);
        return redirect()->route('login');
    }
}
