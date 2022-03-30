<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'tb_music';
    protected $fillable = ["nama_musisi","judul_musik","musik","lirik_musik", "image"];
}
