<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Dados;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Image;

class UserController extends Controller
{ 


   public function profile()
   {
       $user        =  Auth::user();
       $album       =  Album::where('id_user',$user->id)->get();
       $DadosModel  =  Dados::where('id_user',$user->id)->first();
       return view('profile',compact('user','album','DadosModel'));
   }

   public function update_avatar(Request $request)
   {
    $user = Auth::user();
 
    $album  =  Album::where('id_user',$user->id)->get();
    $DadosModel = new Dados;


    if($request->hasFile('avatar')){
        $avatar   = $request->file('avatar');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        $file     = $request->avatar->storeAs('public/avatars',$filename);      
        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
    }
  
    Auth::user()->name = $request->name;    
    $DadosModel->Wathasap = $request->Wathasap;
    $DadosModel->bairro  = $request->bairro;
    $DadosModel->cep     = $request->cep;
    $DadosModel->descricao = $request->descricao;
    $DadosModel->id_user = $user->id;
    $DadosModel->save();

    return view('profile',compact('user','album','DadosModel'));
   }

   public function upload_images(Request $request)
   {
       $id_user  = Auth::user()->id;
       $userName = Auth::user()->name;
    
       if ($request->hasfile('album')) {
           for ( $x=0;  $x< count($request->allFiles()['album']);  $x++) {
             
                  $file = $request->allFiles()['album'][$x];
                   $filename = time().'.'.$file->getClientOriginalExtension();  
                   $upload =  $file->storeAs('public/uploads', $filename );               
                   $Album  = new Album;
                   $Album->image =    $filename;
                   $Album->id_user =   $id_user;
                   $Album->save();
         
               }
       }

      
       return back()->with('success', 'Data Your files has been successfully added');
   }

   public function destroy($id){
    $album = Album::find($id);
    $album->delete(); 
    return redirect('/profile')->with('status', 'Profile updated!');
  
     
   }
}
