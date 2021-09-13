<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use App\Models\Dados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        if(auth()->user()->email == "gerro121@hotmail.com"){
            return view('home',compact('users'));
        }

       $users        =  Auth::user();
       $album       =  Album::where('id_user',$users->id)->get();
       $DadosModel  =  Dados::where('id_user',$users->id)->first();
       return view('profile',compact('users','album','DadosModel'));     
    }

    public function Status($id , Request $request)
    {
     
        $status = ($request->status == 'ativado' ?  "desativado" : "ativado");
        $user = User::find($id);
        $user->status = $status;
        $user->save();
        return redirect('home')->withSuccess('Atualizado com sucesso');
    }

    public function edit($id)
    {
        $user        =  User::find($id);
        $album       =  Album::where('id_user',$id)->get();
        $DadosModel  =  Dados::where('id_user',$id)->first();
        return view('editar',compact('user','album','DadosModel'));
    }

    public function update($id,Request $request)
    {      
        $album  =  Album::where('id_user',$id)->get();
        $DadosModel = new Dados;
        $user = User::find($id);
        if($request->hasFile('avatar')){
            $avatar   = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            $file     = $request->avatar->storeAs('public/avatars',$filename);      
      
            $user->avatar = $filename;
            $user->save();
        }
      
        $user->name             = $request->name;    
        $DadosModel->Wathasap   = $request->Wathasap;
        $DadosModel->bairro     = $request->bairro;
        $DadosModel->cep        = $request->cep;
        $DadosModel->descricao  = $request->descricao;
        $DadosModel->id_user    = $user->id;
        $DadosModel->save();
        return redirect('home')->withSuccess('Atualizado com sucesso');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($id);
        return redirect('home')->withSuccess('Excluido  com sucesso');
    }


    public function config()
    {
        
        return view('config');
    }

    public function configStore(Request $request)
    {        
    
    }


    public function admin()
    {
        $users = User::all();
       return view('admin',compact('users'));     
    }


}
