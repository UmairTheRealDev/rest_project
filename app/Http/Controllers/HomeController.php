<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('Restaurant');
    }
    public function logged()
    {
        $data = User::where('usertype','user')->get();
        $utype = Auth::user()->usertype;
        if($utype == "admin")
        {
            return view("admin.table",['data' => $data]);
        }
        else
        {

            return view("Restaurant");
        }
    }
}
