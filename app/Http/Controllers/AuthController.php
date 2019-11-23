<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\EventNovoRegistro;


class AuthController extends Controller
{
    public function register(Request $request){
        //nome email senha
        $request->validate([
            'tipo' => 'required|string',
            'sexo' => 'required|string',
            'name'=> 'required|string',
            'email' => 'required|string|email|unique:users',
            'password'=> 'required|string|confirmed',
        ]);
        $user = new User([
            'tipo' =>$request->tipo,
            'sexo' =>$request->sexo,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
        ]);
        $user-> save();

        return redirect('/');

    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password'=> 'required|string'
        ]);
        $credenciais = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(!Auth::attempt($credenciais))
            return redirect()->back()->with('msg', 'Deu ruim boy');

            // $user = $request->user();
            // $token = $user->createToken('Token de acesso')->accessToken;


            return redirect('/cadastroconsultorio');
    }

    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'res'=> 'Deslogado com sucesso'
        ], 200);
    }

    public function sendToken(Request $request)
    {

    }




    // public function activeRegister($id, $token){
    //     $user = User::find($id);
    //     if($user){
    //         if($user->token == $token){
    //             $user->active = true;
    //             $user->token='';
    //             $user->save();
    //             return view('newRegister');
    //         }
    //     }
    // }
}
