<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    /*
     *
     * Variáveis Globais
     *
     */
    protected                          $request;
    protected                          $url_permission;
    protected                          $url_crud;

    //------------------------------------------------------------------------------------------------------------------
    public function __construct
    (
        Request                        $request
    )
    {
        $this->middleware('auth');
        $this->request                 = $request;
        $this->url_permission          = explode('.', $this->request->route()->getName())[2];
        $this->url_crud                = explode('.', $this->request->route()->getName())[1];

    }
    //------------------------------------------------------------------------------------------------------------------
    public function Show()
    {
        $action = $compact = $this->CompactShow();
        if($action['permission']==true ? $return = view("Painel.$this->url_crud.$this->url_permission", $compact) : $return = redirect('/login')->with('error', 'Acesso Negado!'))
        return $return;
    }
    //------------------------------------------------------------------------------------------------------------------

    /*
     *
     * Funções Auxiliares
     *
     *
     */
    public function CompactShow()
    {
        return $compact =
            [
                'permission'             =>$this->Gate("$this->url_permission-$this->url_crud"),
                'title'                  =>"Painel de Controle - $this->url_crud",
            ];
    }
    public function CompactAction()
    {
        return $compact =
            [
                'permission'             =>$this->Gate("$this->url_permission-$this->url_crud"),
                'title'                  =>"Painel de Controle - $this->url_crud",
            ];
    }
    public function Gate($habilidade)
    {
        if( Gate::allows($habilidade) )
        {
            return true;
        }
        $this->getLogout();
        return false;
    }
    public function getLogout(){
        auth()->logout();
    }
}
