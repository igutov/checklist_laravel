<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // $userId = Auth::user()->id;

        // $lists = DB::table('lists')->where('user_id', '=', $userId)->get();
        // $tasks = DB::table('tasks')->where('list_id', '=', 2)->get();

        // return view(
        //     'page.index',
        //     [
        //         'lists' => $lists,
        //         'tasks' => $tasks,
        //     ]
        // );

        // return view('page.index');
    }
}
