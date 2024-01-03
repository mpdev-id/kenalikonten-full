<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    // Display login form
    public function login()
    {
        return view('FE.login');
    }

    // Handle login request
    public function loginAuth(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.home');
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    // Logout user
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    // Send email notification
    // private function sendEmailNotification()
    // {
    //     $toEmail = 'mnprasetya@gmail.com';
    //     $subject = 'Login Notification';
    //     $message = 'Someone logged into the system using your credentials.';

    //     Mail::send([], [], function ($message) use ($toEmail, $subject, $message) {
    //         $message->to($toEmail)
    //                 ->subject($subject)
    //                 ->setBody($message, 'text/plain');
    //     });
    // }
}
