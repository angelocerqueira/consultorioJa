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

    public $office;
    public function __construct(Office $office){
        $this->office = $office;
    }

    public function index()
    {

        $office = $this->office->with('photos')->paginate(9);
        // foreach($test as $testes){

        // }
        // $post = Office::all();
        return view('pages.immobilesresult', compact(['office']));
    }


    public function store(Request $request)
    {

           $data = $request->all();
        $data['structure'] = implode(",", $data['structure']);
        $data['specialties'] = implode(",", $data['specialties']);
        $data['equipaments'] = implode(",", $data['equipaments']);
        $data['period_atend'] = implode(",", $data['period_atend']);
        $data['days_atend'] = implode(",", $data['days_atend']);
        $data['file'] = implode(",", $data['file']);

        $images = $request->file('file');
        try{

            $office = $this
            ->office
            ->create($data);

            if($images){
                $imagesUploaded = [];
                // dd($imagesUploaded);

                foreach($images as $image)
                {
                   $path = $image->store('images', 'public');
                   $imagesUploaded[] = ['photo' => $path, 'is_thumb' => false ] ;           // dd($path);

                }

                $office->photos()->createMany($imagesUploaded);
            }


          return redirect('/resultbusca');

        }
        catch(\Exception $e){
            return response()
            ->json(['error' =>
            $e->getMessage()], 400);
        }

    }





    public function search(Request $request)
    {
        $office= $this->office->get();
        $search = $request->input('search');
        // dd($search);

        $post = DB::table('offices')
        ->where('cidade', 'like', '%'. $search .'%')
        ->where('endereco', 'like', '%'. $search .'%')
        ->where('structure', 'like', '%'. $search .'%')
        ->paginate(9);


        // dd($a);

        return view('pages.immobilesresult',['post' => $post], compact('office'));
    }


    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

}

