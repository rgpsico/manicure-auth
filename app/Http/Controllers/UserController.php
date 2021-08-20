<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Album;
use App\Models\Dados;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;

class UserController extends Controller
{
    
    private $Dados;
    
    public function __construct( Dados $Dados)
    {
        $this->middleware('auth');
        $this->Dados = $Dados;
        
    }



   public function profile()
   {
       $user        =  Auth::user();
       $album       =  Album::where('id_user',$user->id)->get();
       $DadosModel  =  Dados::where('id_user',$user->id)->first();

       return view('profile',compact('user','album','DadosModel'));
   }



   public function update_avatar(UserRequest $request)
   {
    $user   = Auth::user();
    $dados  = $request->all();
    $album  =  Album::where('id_user',$user->id)->get();
    $DadosModel = new Dados;

      if ($request->hasFile('avatar')) {
            $avatar       = $request->file('avatar');
            $filename     = time().'.'.$avatar->getClientOriginalExtension();
            $file         = $request->avatar->storeAs('public/avatars',$filename);      
            $user         = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
  
     $dados = $request->all();
     $dados['id_user'] = $user->id;
  
     $existeDados = $this->Dados::where('id_user',$user->id)->first();
 
     if ( !$existeDados ) {
        $create = $this->Dados->create($dados);
     } else {
        $dadosuser = [
            'name'=>$dados['name'],
        ];
        $update = $user->update($dadosuser);

        $dados = [
           'Wathasap' => $dados['Wathasap'],
           'bairro' => $dados['bairro'],
           'cep'=> $dados['cep'],
           'descricao' =>$dados['descricao'] ,
           'id_user' => $user->id
       ]; 
       $update = Dados::where('id_user',$user->id)->update($dados);
     }
    
     $DadosModel = $DadosModel::where('id_user',$user->id)->first();
    return view('profile',compact('user','album','DadosModel'));

   }

   public function upload_images(Request $request)
   {
       $id_user  = Auth::user()->id;
       $userName = Auth::user()->name;
       $Album  = new Album;

       $count = $Album::where('id_user',$id_user)->count();
       

       if($count > 4){
        return back()->with('status', 'O maximo de imagem são 5 fotos');

       }
        
       if ($request->hasfile('album')) {
           for ( $x=0;  $x< count($request->allFiles()['album']);  $x++) {             
                  $file = $request->allFiles()['album'][$x];
                   $filename = time().'.'.$file->getClientOriginalExtension();  
                   $upload =  $file->storeAs('public/uploads', $filename );               
                   $Album->image =    $filename;
                   $Album->id_user =   $id_user;
                   $Album->save();         
               }
       }      
       return back()->with('status', 'Data Your files has been successfully added');
   }

   public function destroy($id){
    $album = Album::find($id);

    $image = $album->image;
    
    Storage::delete('public/uploads/'.$image);
    $album->delete(); 
    return redirect('/profile')->with('status', 'Excluido com sucesso');
  
     
   }
}
