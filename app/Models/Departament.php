<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_departament'
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'id_departament');
    }
}
