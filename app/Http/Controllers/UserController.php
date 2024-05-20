<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userValidation;

    function __construct()
    {
        $this->userValidation = [
            "name" => "required|min:3|max:20",
            "email" => "required|min:7|max:30|unique:users",
            "password" => "required|min:8|max:16",
        ];
    }

    function getUsers()
    {
        $users = User::all();
        $users = $users->toArray();

        return view("users", [
            "users" => $users
        ]);
    }

    public function detailUser($id)
    {
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        return view("users.detail", [
            "user" => $user
        ]);
    }

    public function create()
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        // nama, email, password, umur
        $validation = $request->validate($this->userValidation);

        $errors = [];

        if (strlen(request()->post("name")) < 3) {
            array_push($errors, "Nama harus lebih dari 3 karakter");
            return $errors;
        }

        $payload = $request->only(['name', 'email', 'password']);
        $payload['password'] = bcrypt($payload['password']);
        $payload['role'] = 3;
        $payload['gender'] = 'L';

        $user = User::create($payload);

        return $user;
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        return view('users.edit', [
            "user" => $user->toArray(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        $payload = $request->only(['name', 'email', 'password']);

        $user->update($payload);

        return $user;
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) { // !false == true
            return "User tidak ditemukan";
        }

        $user->delete();

        return "Data user berhasil dihapus";
    }
}
