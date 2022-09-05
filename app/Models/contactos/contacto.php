<?php

namespace App\Models\contactos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;
    protected $table = 'contacto';
    protected $hidden = ['created_at','updated_at'];
    protected $guarded = [];    
}

