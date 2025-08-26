<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::orderByDesc('created_at')->paginate(12);
        return view('admin.feedback.index', compact('feedback'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Feedback deleted');
    }

    // Public submit
    public function storePublic(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:2000',
        ]);

        Feedback::create([
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'is_approved' => true,
        ]);

        return redirect('/')->with('status', 'Thank you for your feedback!')->with('openFeedback', true);
    }

    // Public feedback overview
    public function getPublicFeedback()
    {
        $feedback = Feedback::where('is_approved', true)
                           ->orderByDesc('created_at')
                           ->limit(20)
                           ->get();
        
        return response()->json($feedback);
    }
}


