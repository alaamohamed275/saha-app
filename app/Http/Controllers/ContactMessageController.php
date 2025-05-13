<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
class ContactMessageController extends Controller
{
    public function create()
    {
        return view('dashboard.messages.create'); // عرض نموذج الاتصال
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = ContactMessage::create($validated);

        // إرسال بريد إلكتروني
        // Mail::to('admin@example.com')->send(new \App\Mail\ContactMessageMail($contact));

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح.');
    }
}
