<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Gate;

class PainelController extends Controller
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        $this->middleware('auth');
    }
    //------------------------------------------------------------------------------------------------------------------
    public function index()
    {
        $compact =
            [
                'title'=>'Painel de Controle'
            ];
        return view('Painel.Principal.index', $compact);
    }
    //------------------------------------------------------------------------------------------------------------------

    /*
     *
     * Funções Auxiliares
     *
     *
     */
}
