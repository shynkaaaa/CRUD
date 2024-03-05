<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::paginate(20);
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): \Illuminate\Http\RedirectResponse
    {
        User::create($request->only(['name', 'email']));
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('form', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user): \Illuminate\Http\RedirectResponse
    {
        $user->update($request->only(['name', 'email']));
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
