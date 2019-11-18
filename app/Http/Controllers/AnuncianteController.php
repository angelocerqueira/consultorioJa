<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;



class AnuncianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = DB::table('offices')->paginate(9);
        // $post = Office::all();
        return view('pages.resultbusca', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //  {
            // $request->valide([
            //     'title' => 'required|min:15|max:80',
            //     'description' => 'required',
            //     'cep' => 'required',
            //     'uf' => 'required',
            //     'cidade' => 'required',
            //     'endereco' => 'required',
            //     'number' => 'required',
            //     'structure' => 'required',
            //     'specialties' => 'required',
            //     'equipaments' => 'required',
            //     'period_atend' => 'required',
            //     'days_atend' => 'required',
            //     'value_h' => 'required',
            //     'value_m' => 'required',

            // ]);
    //    }
        $path = $request->file('file')->store('images','public');
        $post =  new Office();

        $post ->title =$request->input('title');
        $post ->description =$request->input('description');
        $post ->cep =$request->input('cep');
        $post ->uf =$request->input('uf');
        $post ->cidade =$request->input('cidade');
        $post ->endereco =$request->input('endereco');
        $post ->number =$request->input('number');
        $post ->complement =$request->input('complement');
        $post ->structure = implode(",", $request->input('structure'));
        $post ->specialties =implode(",", $request->input('specialties'));
        $post ->equipaments =implode(",", $request->input('equipaments'));
        $post ->file = $path;
        $post ->period_atend =implode(",", $request->input('period_atend'));
        $post ->days_atend =implode(",", $request->input('days_atend'));
        $post ->value_h =$request->input('value_h');
        $post ->value_m =$request->input('value_m');
        $post->save();
        return redirect('/resultbusca');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){

        $search = $request->input('search');
        $post = DB::table('offices')->where('cidade', 'like', '%'. $search.'%')->paginate(9);
        return view('pages.resultbusca',['post' => $post]);
    }


    public function show($id)
    {
        $post = DB::select('select * from offices where id = ?', $id);
        // $post = Office::all();
        return view('pages.resultbusca', compact('post'));
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
