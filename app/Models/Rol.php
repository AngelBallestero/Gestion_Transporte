<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $fillable = [
        'rol',
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'id_rol');
    }
}
