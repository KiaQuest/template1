<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('vergilar', compact('data'));
    }

    public function onaylamak(Request $request)
    {
        User::where('id',  $request->key)->update(['stat1' => 1]);
        return redirect()->back()->with('is', 'isleriniz yapilde ☻♥');
    }

    public function sil(Request $request)
    {
        User::where('id',  $request->key)->update(['stat1' => 1 , 'stat2' => 1 , 'deleted_at' => Carbon::now()]);
        return redirect()->back()->with('is', 'isleriniz yapilde ☻♥');
    }
}
