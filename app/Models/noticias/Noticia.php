<?php

namespace App\Models\noticias;

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
}
