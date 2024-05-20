<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.user.index', compact('users'));
    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(User $user, UserRequest $userRequest)
    {
        $data = $userRequest->validated();
        $data['password'] = Hash::make($userRequest->password);

        $user->create($data);
        return redirect(route('user.index'));
    }

    public function edit(User $user)
    {
        return view('pages.user.edit', compact('user'));
    }

    public function update(User $user, UpdateUserRequest $updateUserRequest)
    {
        $data = $updateUserRequest->validated();
        $user->update($data);
        return redirect(route('user.index'));
    }

    public function updatePassword(User $user, UpdatePasswordRequest $updatePasswordRequest)
    {
        $data = $updatePasswordRequest->validated();
        $data['password'] = Hash::make($updatePasswordRequest->password);

        Auth::logout();

        $user->update($data);
        return redirect(route('user.index'));
    }

}
