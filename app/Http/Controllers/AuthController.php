<?php

namespace RestoApp\Http\Controllers;

use Illuminate\Auth\Guard;
use RestoApp\Services\UsuarioService;
use Illuminate\Http\Request;

use RestoApp\Http\Requests;
use RestoApp\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function index(Guard $guard)
    {
        if(!$guard->guest())
            return redirect(route('app.dashboard.index'));

        return view('layouts.login.index');
    }

    /**
     * Realiza login
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, UsuarioService $usuarioService)
    {
        try{
            $user = $usuarioService->authenticate($request->all());
            if($user) return redirect(route('app.dashboard.index'));
            return redirect()->back()->withInput($request->all())->with('error', 'Usuário ou senha inválidos.');
        }catch(\Exception $e){
            return redirect()->back()->withInput($request->all())->with('error', 'Catch: '.$e->getMessage());
        }
    }

}
