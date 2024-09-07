<?php
namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class HomeController extends Controller
{


    public function index(Request $requests){


      
         return view('welcome');



    }

    public function cadastro()
    {
        return view('cadastro');
    }


    public function cadastrocriar(Request $request)
    {

        $data = [
            'nome'           => $request->nome,
            'email'          => $request->email,
            'telefone'       => $request->telefone,
            'cidade'         => $request->cidade,
        ];

        $carga_horaria      = Cadastro::create($data);



    }

    public function listarAlunos(Request $request){

    }




}
