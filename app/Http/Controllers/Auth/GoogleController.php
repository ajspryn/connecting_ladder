<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function GoogleAuth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user= User::where('email', $google_user->email)->first();
            if($user){
                Auth::login($user);
                return redirect('login');
            }
            else{
                $new_user= User::create([
                    'name' => $google_user->name,
                    'email' => $google_user->email,
                    'role' => 0,
                    'email_verified_at' => now(),
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                    'remember_token' => Str::random(10),
                ]);
                Auth::login($new_user);
                return redirect('login');
            }
        } catch (\Throwable $th) {
            abort('404');
        }
    }
}
