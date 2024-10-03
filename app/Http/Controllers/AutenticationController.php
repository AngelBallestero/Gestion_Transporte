<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Document_type;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\VehicleStatus;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 


class AutenticationController extends Controller
{
    public function index()
    {
        $User = User::all();
    }

    // public function show($id)
    // {
    //     $vehicle = vehiculo::find($id);
    //     if ($vehicle) {
          
    //         return response()->json($vehicle, 200);
    //     }
       
    //     return response()->json(['message' => 'Vehicle not found'], 404);
    // }

   
    public function create(){
        $documentTypes = Document_type::all(); 
        return view('welcome', compact('documentTypes'));
    }


    public function tipovehiculo(){
        // $vehicleTypes = VehicleType::all(); 
        // return view('crearvehiculo', compact('vehicleTypes'));
    }

    public function estadovehiculo(){
        // $vehicleStatus = VehicleStatus::all(); 
        // return view('crearvehiculo', compact('$vehicleStatus'));
    }

 



    public function store(Request $request)
    {
        
            $request->validate([
                'id_document_type' =>'required|string',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8', 
            ]);
        
            $user = new User();
            $user->id_document_type = $request->id_document_type;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
  
        
        //  return response()->json(['message' => 'Usuario registrado exitosamente'], 404);
         echo '<script type="text/javascript">'; echo 'alert("Usuario registrado exitosamente")'; echo '</script>';
         return view('login');
         
          
        
    }

    public function login(Request $request)
    {
        $vehicleTypes = VehicleType::all(); 
        return view('crearvehiculo', compact('vehicleTypes'));

        $vehicleStatus = VehicleStatus::all(); 
        return view('crearvehiculo', compact('$vehicleStatus'));

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->route()->with('message', '¡Has iniciado sesión exitosamente!');
            echo '<script type="text/javascript">'; echo 'alert("Has iniciado sesión exitosamente")'; echo '</script>';
            return view('crearvehiculo');
        }
        
    
        echo '<script type="text/javascript">'; echo 'alert("credenciales incorrectas")'; echo '</script>';
        return view('login');
      
        
    }
    
    // public function update(Request $request, $id)
    // {
    //     $vehicle = vehiculo::find($id);
    //     if ($vehicle) {
    //         $request->validate([
    //             'type' => 'sometimes|required|string',
    //             'capacity' => 'sometimes|required|integer',
    //             'status' => 'sometimes|required|string',
    //         ]);

    //         $vehicle->update($request->all());
    //         return response()->json($vehicle, 200);
    //     }
    //     return response()->json(['message' => 'Vehicle not found'], 404);
    // }

    // public function destroy($id)
    // {
    //     $vehicle = vehiculo::find($id);
    //     if ($vehicle) {
    //         $vehicle->delete();
    //         return response()->json(null, 204);
    //     }
    //     return response()->json(['message' => 'Vehicle not found'], 404);
    // }
    public function datos(){
        return view('mostrardatos');
    }

    public function crearvehicle(Request $request)
    {
            $request->validate([
                'id_tipo' =>'required|string|',
                'placa' => 'required|string|',
                'capacidad' => 'required|string|',
                'id_estado' => 'required|string|',
            ]);
        
            $verhicle = new Vehicle();
            $verhicle->id_tipo = $request->id_tipo;
            $verhicle->placa = $request->placa;
            $verhicle->capacidad = $request->capacidad;
            $verhicle->id_estado = $request->id_estado;
            $verhicle->save();
  
        //  return response()->json(['message' => 'Usuario registrado exitosamente'], 404);
         echo '<script type="text/javascript">'; echo 'alert("Usuario registrado exitosamente")'; echo '</script>';
         return view('login');
          
    }
   
    
}



