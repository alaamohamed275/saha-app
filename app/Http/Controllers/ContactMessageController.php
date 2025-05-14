<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class ContactMessageController extends Controller
{

    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);
        return view('dashboard.messages.index', compact('messages'));
    }
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
        try {
                $contact = ContactMessage::create($validated);

                // Send email
                Mail::to('alaanegm275@gmail.com')
                    ->send(new ContactMessageMail($contact));

                return redirect()->back()
                    ->with('success', 'تم إرسال رسالتك بنجاح.');
                    
            } catch (\Exception $e) {
                \Log::error('Contact form error: ' . $e->getMessage());
                
                return redirect()->back()
                    ->with('error', 'حدث خطأ أثناء إرسال رسالتك. يرجى المحاولة مرة أخرى.')
                    ->withInput();
            }
    }

     public function destroy(ContactMessage $message)
    {
        $message->delete();

        return redirect()->route('messages.index')
            ->with('success', 'تم حذف الرساله بنجاح');
    }

      public function show(ContactMessage $message)
    {
        return view('dashboard.messages.show', compact('message'));
    }
}
