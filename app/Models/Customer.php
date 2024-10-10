<?php

namespace App\Models;

use App\Models\City;
use App\Models\Departament;
use App\Models\Document_type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_user',
        'id_document_type',
        'document',
        'name',
        'last_name',
        'phone',
        'email',
        'id_departament',
        'id_city',
        'address',
        'neighborhood',
        'password',
        'confirm_password',

    ];

    public function documentType()
    {
        return $this->belongsTo(Document_type::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
