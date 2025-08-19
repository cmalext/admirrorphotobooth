<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'content' => ['nullable', 'string', 'max:2000'],
        ]);

        $request->user()->pins()->create($data);

        return back()->with('status', 'Pin added');
    }

    public function destroy(Pin $pin): RedirectResponse
    {
        abort_unless($pin->user_id === request()->user()->id, 403);
        $pin->delete();
        return back()->with('status', 'Pin removed');
    }
}


