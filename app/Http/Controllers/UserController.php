<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUser(Request $request, $id)
    {
        return response()->json(User::find($id));
    }

    public function getUsers(Request $request)
    {
        return response()->json(User::all());
    }

    public function deleteUser(Request $request, $id)
    {
        return dd($id);
    }


}
