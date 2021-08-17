<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    private $user ;
    
    public function __construct(User $user)
    {
        $this->user = $user;
        
    }
  
    public function index(Request $request)
    {         
    $bairro   = ($request->get('bairro') == null ? "" : $request->get('bairro') );  
    $dados    =  new Dados;
    $users    =  User::all()->where('status','ativado');
   

      if($bairro){         
          $users = $this->user->filtro($bairro);
      }
        
    return view('site.template.template',compact('users'));
    }

    public function show($id)
    {        
        $user = new User;
        $users = $user->show($id);
        $album = $user->album($id);
        return view('detalhes.template.template',compact('users','album'));
    }
}
