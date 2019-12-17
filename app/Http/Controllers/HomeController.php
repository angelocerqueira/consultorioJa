<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    // public function homepage(){

    //     // $post = Office::all()->unique();
    //     $post = DB::select('select uf, cidade from offices ');

    //     // $post = Office::all();
    //     return view('index', compact('post'));
    // }

    // public function searchHome(Request $request){

    //     $uf = $request->input('uf');
    //     $cidade = $request->input('cidade');

    //     $post_home = DB::table('offices')->where('cidade', 'like', '%'. $cidade.'%')
    //     ->orWhere('uf', 'like', '%'. $uf.'%')
    //     ->paginate(9);
    //     return view('pages.immobilesresult',['post' => $post_home]);
    // }


}
