<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')->latest()->take(50)->get();

        return view('reports.index', ['messages' => $messages]);
    }
}
