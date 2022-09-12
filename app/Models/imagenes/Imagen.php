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
    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function noticias(){
        return $this ->HasMany(Imagen::class,"image_noticia");
       }
}
