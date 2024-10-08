<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
use HasFactory;

    protected $fillable = [
        'name_departament'
    ];
   public function Customer()
    {
        return $this->hasMany(Customer::class, 'id_departament');
    }
 
    public function cities()
    {
        return $this->hasMany(City::class, 'id_departament');
    }
    
}
