<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AutfKontroler extends Controller
{

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Error! ' => $validator->errors()
            ]);
        }

        $korisnik = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'Korisnik: ' => $korisnik
        ]);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Error! ' => $validator->errors()
            ]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'Login error!'
            ]);
        }

        $korisnik = User::where('email', $request['email'])->first();
        $token = $korisnik->createToken('token')->plainTextToken;

        return response()->json([
            'Korisnik: ' => $korisnik,
            'Login token: ' => $token
        ]);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'Info: ' => 'Successful logout'
        ]);
    }
}
