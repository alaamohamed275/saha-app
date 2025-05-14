<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
class MissionController extends Controller
{
     public function index()
    {
        $missions = Mission::latest()->paginate(10);
        return view('dashboard.missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.missions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Mission::create($request->all());

        return redirect()->route('missions.index')
            ->with('success', 'تم إضافة المهمه بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mission $mission)
    {
        return view('dashboard.missions.show', compact('mission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mission $mission)
    {
        return view('dashboard.missions.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mission $mission)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $mission->update($request->all());

        return redirect()->route('missions.index')
            ->with('success', 'تم تحديث الخدمة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect()->route('missions.index')
            ->with('success', 'تم حذف الخدمة بنجاح');
    }
}
