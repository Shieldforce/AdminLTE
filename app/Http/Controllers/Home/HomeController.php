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
    public function Show()
    {
        $compact =
            [
                'title'=>'Página Principal da Home'
            ];
        return view('Home.Principal.Show', $compact);
    }
    //------------------------------------------------------------------------------------------------------------------

    /*
     *
     * Funções Auxiliares
     *
     *
     */
}
