<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VehicleStatus;
use App\Models\VehicleType;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tipo',
        'estado',
        'capacidad',
        'id_estado',
    ];
    public function type()
    {
        return $this->belongsTo(VehicleType::class, 'id_tipo');
    }

    
    public function status()
    {
        return $this->belongsTo(VehicleStatus::class, 'id_estado');
    }
}
