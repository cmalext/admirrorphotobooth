<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Pin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    /**
    * Show the admin login form.
    */
    public function showLogin(): View
    {
        return view('admin.login');
    }

    /**
    * Handle admin login attempt.
    */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = (bool) $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
    * Admin dashboard.
    */
    public function dashboard(): View
    {
        $totalMessages = ContactMessage::count();
        $todaysMessages = ContactMessage::whereDate('created_at', now()->toDateString())->count();
        $weeksMessages = ContactMessage::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();

        $recentMessages = ContactMessage::latest()->limit(10)->get();
        $pins = Pin::where('user_id', auth()->id())->latest()->get();

        return view('admin.dashboard', [
            'totalMessages' => $totalMessages,
            'todaysMessages' => $todaysMessages,
            'weeksMessages' => $weeksMessages,
            'recentMessages' => $recentMessages,
            'pins' => $pins,
        ]);
    }

    /**
    * Logout the current user.
    */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}


