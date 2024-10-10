<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Document_types;
use App\Models\Customer;

class document_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_document',
    ];

    public function Customer()
    {
        return $this->hasMany(Customer::class, 'id_document_type');
    }


}
