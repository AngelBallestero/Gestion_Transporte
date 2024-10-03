<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ]; 
    
    public function Vehicle()
    {
        return $this->hasMany(Vehicle::class, 'id_estado');
    }
}
