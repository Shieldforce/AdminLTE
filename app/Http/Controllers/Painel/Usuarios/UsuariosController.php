<?php

namespace App\Http\Controllers\Painel\Usuarios;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = 'Painel de usuários';
        $usuarios = $this->model->where('id', '!=', 0)->get();
        return view('Painel.Usuarios.index', compact('title', 'usuarios'));
    }


    public function create()
    {
        $title = 'Painel Cadastro de Usuários';
        return view('Painel.Usuarios.create', compact('title'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
