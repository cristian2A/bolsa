<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function listar(){
        return view('admin.empresas-listado');   
    }


    public function crear(){
        return view('admin.empresas-form-alta');
    }

}