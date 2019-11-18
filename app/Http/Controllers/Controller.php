<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Office;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){

        // $post = Office::all()->unique();
        $post = DB::select('select uf, cidade from offices ');

        // $post = Office::all();
        return view('index', compact('post'));
    }

  public function searchHome(Request $request){

        $uf = $request->input('uf');
        $cidade = $request->input('cidade');

        $post_home = DB::table('offices')->where('cidade', 'like', '%'. $cidade.'%')
        ->orWhere('uf', 'like', '%'. $uf.'%')
        ->paginate(9);
        return view('pages.resultbusca',['post' => $post_home]);
    }


}

