<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
 protected $table = "album";
 public $timestamps = null;

 public function images()
 {
     return $this->belongsTo(User::class);
 }
}
