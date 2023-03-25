<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function homeView()
    {
        return view('home');
    }
    public function loginView()
    {
        return view('usuarios/login');     
    }
    
    
    
    public function cadastroView()
    {
        return view('usuarios/cadastro');
    }

    public function contaView()
    {
        return view('usuarios/minha-conta');
    }
}