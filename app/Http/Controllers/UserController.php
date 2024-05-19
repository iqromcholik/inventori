<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
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

}
