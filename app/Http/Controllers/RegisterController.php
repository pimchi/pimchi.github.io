<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        User::create([
            'password' => bcrypt($request->password),
            'role' => RoleEnum::USER->value
        ] + $request->all());
        return redirect()->route('login');
    }
}
