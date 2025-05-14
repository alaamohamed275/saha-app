<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
class ContactController extends Controller
{

     public function index() {
        $contact = ContactInfo::first();
        return view('dashboard.contact.index', compact('contact'));
    }

    public function create()
    {
        return view('dashboard.contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'email' => 'nullable|email',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'googleplaylink' => 'nullable|url',
            'appstorelink' => 'nullable|url',
        ]);

        ContactInfo::create($data);

        return redirect()->route('contact.index')->with('success', 'تم الحفظ بنجاح');
    }

    public function edit(ContactInfo $contact)
    {
        return view('dashboard.contact.edit', compact('contact'));
    }

    public function update(Request $request, ContactInfo $contact)
    {
        $data = $request->validate([
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'email' => 'nullable|email',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'googleplaylink' => 'nullable|url',
            'appstorelink' => 'nullable|url',
        ]);

        $contact->update($data);

        return redirect()->route('contact.index')->with('success', 'تم التحديث بنجاح');
    }
}
