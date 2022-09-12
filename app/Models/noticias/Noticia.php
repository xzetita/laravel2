<?php

namespace App\Models\noticias;

use App\Models\imagenes\Imagen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class noticia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'noticias';
    protected $hidden = ['created_at'];
    protected $guarded = [];
    public function users(){
        return $this ->belongsToMany(User::class,"users");
       }
    public function imagenes(){
    return $this ->HasMany(Imagen::class,"image_noticia");
   }
}
