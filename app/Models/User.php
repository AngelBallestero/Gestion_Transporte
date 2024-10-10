<?php

namespace App\Models;


use App\Models\Customer;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'email',
        'name',
        'last_name',
        'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'rol_users');
    }

    public function customer()
    {
            return $this->hasMany(Customer::class, 'id_user');
        
    }

    public function hasRole($roleName)
    {
        return $this->roles()->where('name',$roleName)->exists();
    }

}
