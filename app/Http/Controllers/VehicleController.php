<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\VehicleStatus;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

public function index(){  

    $vehicle = Vehicle::all();  
    return response()->json(['message' => $vehicle], 404);  

}

public function create(){ 

    $vehicleStatus = VehicleStatus::all(); 
    $vehicleTypes = VehicleType::all(); 
    return view('crearvehiculo', compact('vehicleTypes','vehicleStatus'));
}

public function store(Request $request){

    $request->validate([
        'id_tipo' =>'required|string|',
        'placa' => 'required|string|',
        'modelo' => 'required|string',
        'capacidad' => 'required|string|',
        'consumo_de_combustible' => 'required|string|',
        'id_estado' => 'required|string|',
    ]);
        
        $verhicle = new Vehicle();
        $verhicle->id_tipo = $request->id_tipo;
        $verhicle->placa = $request->placa;
        $verhicle->modelo = $request->modelo;
        $verhicle->capacidad = $request->capacidad;
        $verhicle->consumo_de_combustible = $request->consumo_de_combustible;
        $verhicle->id_estado = $request->id_estado;
        $verhicle->save();

        //  return response()->json(['message' => 'Usuario registrado exitosamente'], 404);
        echo '<script type="text/javascript">'; echo 'alert("Vehiculo registrado exitosamente")'; echo '</script>';
        return view('login');
        
    
}
}


