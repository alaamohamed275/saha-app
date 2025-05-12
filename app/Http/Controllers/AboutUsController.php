<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index() {
        $about = AboutUs::first();
        return view('about.index', compact('about'));
    }

    public function create() {
        return view('about.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'header' => 'nullable|string',
            'logo' => 'nullable|string',
            'about_description' => 'nullable|string',
            'mission_description' => 'nullable|string',
            'message_description' => 'nullable|string',
            'vision_description' => 'nullable|string',
        ]);
        AboutUs::create($data);
        return redirect()->route('about-us.index')->with('success', 'تمت الإضافة بنجاح');
    }

    public function edit(AboutUs $about_u) {
        return view('about.edit', ['about' => $about_u]);
    }

    public function update(Request $request, AboutUs $about_u) {
        $data = $request->validate([
            'header' => 'nullable|string',
            'logo' => 'nullable|string',
            'about_description' => 'nullable|string',
            'mission_description' => 'nullable|string',
            'message_description' => 'nullable|string',
            'vision_description' => 'nullable|string',
        ]);
        $about_u->update($data);
        return redirect()->route('about-us.index')->with('success', 'تم التحديث بنجاح');
    }

    public function destroy(AboutUs $about_u) {
        $about_u->delete();
        return redirect()->route('about-us.index')->with('success', 'تم الحذف بنجاح');
    }
}
