<?php

namespace App\Models;

use App\Models\Rol;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
      
    protected $fillable = [
        'user',
        'password',
        'id_rol'
    ];
    public function rols()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }

}
