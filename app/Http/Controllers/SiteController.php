<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {

        $dados    =  new Dados;
        $users    =  ($request->get('bairro') == null ? $this->user->Dados() : $this->user->filtro($request->get('bairro')));

        return view('site.template.template', compact('users'));
    }

    public function show($id)
    {
        $user = new User;
        $users = $user->show($id);
        $album = $user->album($id);
        return view('detalhes.template.template', compact('users', 'album'));
    }
}
