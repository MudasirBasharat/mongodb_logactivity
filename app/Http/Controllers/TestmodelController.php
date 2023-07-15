<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestmodelController extends Controller
{
    public function user(Request $request)
    {
        // Retrieve data from the request
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        // Perform some operations or logic
        // ...

        // Return a response
        return response()->json(['message' => 'Example method executed successfully']);
    }
}
