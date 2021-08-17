<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Dados()
    {
        return $users = DB::table('users')
        ->join('dados', 'users.id', '=', 'dados.id_user')
        ->select('users.*', 'dados.*')
        ->get();
    }

    public function filtro($bairro)
    {
        return $users = DB::table('users')
        ->join('dados', 'users.id', '=', 'dados.id_user')
        ->select('users.*', 'dados.id_user','dados.Wathasap','dados.bairro')
        ->where('bairro',$bairro)
        ->get();
    }

    public function show($id)
    {
        return $users = DB::table('users')
        ->join('dados', 'users.id', '=', 'dados.id_user')
        ->select('users.*', 'dados.*')
        ->where('id_user',$id)
        ->where('status','ativado')
        ->first();
    }

    public function Album($id)
    {
        return $album = DB::table('album')
        ->where('id_user',$id)
        ->get();
   
    }

    public function Dado()
    {
        return $this->hasOne(Dados::class);
    }
}
