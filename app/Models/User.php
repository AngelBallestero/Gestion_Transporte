<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use app\Models\Document_type;

class User extends Authenticatable {
    use Notifiable;

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


}

