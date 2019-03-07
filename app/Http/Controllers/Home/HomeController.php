<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {

    }
    //------------------------------------------------------------------------------------------------------------------
    public function index()
    {
        $compact =
            [
                'title'=>'Página Principal da Home'
            ];
        return view('Home.Principal.index', $compact);
    }
    //------------------------------------------------------------------------------------------------------------------

    /*
     *
     * Funções Auxiliares
     *
     *
     */
}
