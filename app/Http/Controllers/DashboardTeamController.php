<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class DashboardTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.teams.index', [
            'teams' => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'position' => ['required'],
            'image' => ['image', 'file', 'max:1024'],
            'email' => ['nullable'],
            'facebook' => ['nullable'],
            'instagram' => ['nullable'],
            'linkedin' => ['nullable']
        ]);
        
        if($request->file('image'))
        {
            $validated['image'] = $request->file('image')->store('team-images');
        }

        Team::create($validated);

        return redirect('/dashboard/teams')->with('success', 'Team has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('dashboard.teams.edit', [
            'teams' =>  $team
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'position' => ['required'],
            'image' => ['image', 'file', 'max:1024'],
            'email' => ['nullable'],
            'facebook' => ['nullable'],
            'instagram' => ['nullable'],
            'linkedin' => ['nullable']
        ]);

        if($request->file('image'))
        {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('team-images');
        }

        Team::where('id', $team->id)
            ->update($validated);
        
        return redirect('/dashboard/teams')->with('success', 'Team has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if($team->image) {
            Storage::delete($team->image);
        }

        Team::destroy($team->id);

        return redirect('/dashboard/teams')->with('success', 'Team has been deleted!');
    }
}
