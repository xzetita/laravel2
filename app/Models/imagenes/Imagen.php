<?php

namespace App\Models\imagenes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagen extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "images";
    public function noticias(){
        return $this ->HasMany(Imagen::class,"noticias_has_images");
       }
}
