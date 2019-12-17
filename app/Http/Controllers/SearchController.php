<?php

namespace App\Http\Controllers;
use App\Office;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $office;

    public function __construct(Office $office){
        $this->office = $office;
    }

    public function index(){
        $office = $this
        ->office
        ->with('photos')
        ->get();

        $teste = json_decode($office);
        return view('pages.immobilesresult', compact(['office']));
    // }
    }

    public function show(Request $request, $immobileId)
    {
        try{
            $office = $this
            ->office
            ->with('photos')
            ->find($immobileId);


            $teste = json_decode($office);
            // dd($teste);

            return view('pages.immobile', compact(['teste', 'immobileId']));

        }catch(\Exception $e){
            return  response()->json(['error'=> 'Não encontrado'], 400);
            }
    }

    public function enrollment(Request $request, $immobileId)
    {
        $data = $request->all();
        // dd($data);

        try{
        $office = $this
        ->office
        ->with('photos')
        ->find($immobileId);



        $teste = json_decode($office);
        // dd($teste);

        return view('pages.enrollment', compact(['teste', 'immobileId']));

        }catch(\Exception $e){
        return  response()->json(['error'=> 'Não encontrado'], 400);
        }
    }

    public function thanks(Request $request, $immobileId)
    {


        try{
        $office = $this
        ->office
        ->with('photos')
        ->find($immobileId);
        $teste = json_decode($office);
        // dd($teste);
        return view('pages.thanks', compact(['teste', 'immobileId']));

        }catch(\Exception $e){
            return  response()->json(['error'=> 'Não encontrado'], 400);
        }
    }

}
