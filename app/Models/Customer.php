<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_document_type',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function documentType()
    {
        return $this->belongsTo(Document_type::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'id_city');
    }

    public function departament()
    {
        return $this->belongsTo(Departament::class, 'id_city');
    }

}
