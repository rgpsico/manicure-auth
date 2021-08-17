<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dados extends Model
{

 public $timestamps = null;
 protected $fillable = [
    'id_user', 'Wathasap','bairro' ,'descricao','cep','celular'
];

 public function user()
 {
     return dd($this->hasOne(User::class));
 }
}
