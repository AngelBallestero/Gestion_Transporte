<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Document_type;
use app\Models\User;

class document_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

}
