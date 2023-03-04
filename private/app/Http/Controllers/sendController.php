<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class sendController extends Controller
{
    public function analiz(Request $request)
    {

//        $this->validate(request(), [
//            'name' => 'required|max:255',
//        ]);

//        User::create($request->all());
        User::insert($request->all());
        dd($request->all());
    }

    public function all()
    {
        $users = User::all();
       return response()->json($users);
    }
}
