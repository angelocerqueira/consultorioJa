<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use Illuminate\Support\Facades\DB;


class SearchAdvancedController extends Controller
{

    protected $office;

    public function __construct(Office $office)
    {
        $this->office = $office;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
       $office = $this->office->get();

        $estado = $request->input('estado');
        $cidade = $request->input('cidade');
        // $period_atend = $request->input('period_atend');
        // $days_atend = $request->input('days_atend');
        // $specialties = $request->input('specialties');
        // $equipaments = $request->input('equipaments');

        // dd($period_atend);

        $post = DB::table('offices')
        ->where('uf', 'like', '%'. $estado.'%')
        ->where('cidade', 'like', '%'. $cidade.'%')
        ->paginate(9);
 // ->where('period_atend', 'like', '%'. $period_atend !== null ? implode(',' , $period_atend) : $period_atend .'%')
        // ->where('days_atend', 'like', '%'. $days_atend !== null ? implode(',', $days_atend) : $days_atend.'%')
        // ->where('specialties', 'like', '%'. $specialties !== null ? implode(',', $specialties) : $specialties .'%')
        // ->where('equipaments', 'like', '%'. $equipaments !== null ? implode(',', $equipaments) : $equipaments.'%')

        dd($post);



        // dd($post);

        return view('pages.immobilesresult',['post' => $post], compact('office'));
    }



}
