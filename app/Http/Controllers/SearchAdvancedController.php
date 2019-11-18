<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use Illuminate\Support\Facades\DB;


class SearchAdvancedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){

        $estado = $request->input('estado');
        $cidade = $request->input('cidade');
        // $period_atend = $request->input('period_atend');
        // $days_atend = $request->input('days_atend');
        // $specialties = $request->input('specialties');
        // $equipaments = $request->input('equipaments');

        $post = DB::table('offices')->where('uf', 'like', '%'. $estado.'%')
        ->where('cidade', 'like', '%'. $cidade.'%')
        ->paginate(9);
        return view('pages.resultbusca',['post' => $post]);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
