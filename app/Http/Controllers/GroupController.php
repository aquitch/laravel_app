<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreGroupRequest;
use App\Models\Group;
use App\Models\User;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();

        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = User::all();
        
        return view('groups.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->input());
        Group::create($request->validated());

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $group->load([
            'leadOfGroup',
            'students'
            ]);
     
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        $group->load([
            'leadOfGroup',
            'students'
            ]);

        $students = User::all();
        
        return view('groups.edit', compact('group', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGroupRequest $request, Group $group)
    {
        //dd($request);
        //dd($request->validated());

        $group->load('students')->update($request->validated());

        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
