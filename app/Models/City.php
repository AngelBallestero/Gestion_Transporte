<?php

namespace App\Models;
use App\Models\Departament;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_city',
    ];

    public function Customer()
    {
        return $this->hasMany(Customer::class, 'id_city');
    }
    
    public function Departament()
    {
        return $this->belongsTo(Departament::class, 'id_departament');
    }

}
