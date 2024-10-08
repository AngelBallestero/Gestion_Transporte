<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document_type;
use App\Models\Departament;
use App\Models\City;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 


class AutenticationController extends Controller
{
    public function index()
    { 
        $custome = Customer::all();
        return response()->json(['message' =>  $custome], 404);  
    }


    public function show($id){
        $custome = Customer::find($id);
        if ($custome) {  
            return response()->json($custome, 200);
        }
    
        return response()->json(['message' => 'User not found'], 404);
    }


    public function create(){
        $documentTypes = Document_type::all(); 
        $departaments = Departament::all(); 
        $citys = City::all(); 
        return view('welcome', compact('documentTypes','departaments','citys'));
    
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_document_type' => 'required|string',
            'document' => 'required|string',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email|max:255|unique:customers',
            'id_departament' => 'required|string',
            'id_city' => 'required|string',
            'address' => 'required|string',
            'neighborhood' => 'required|string',
            'password' => 'required|string|min:8', 
            'confirm_password' => 'required|string',
        ]);
        
        $custome = new Customer();
        $custome->id_document_type = $request->id_document_type;
        $custome->document = $request->document;
        $custome->name = $request->name;
        $custome->last_name = $request->last_name;
        $custome->phone = $request->phone;
        $custome->email = $request->email;
        $custome->id_departament = $request->id_departament; 
        $custome->id_city = $request->id_city; 
        $custome->address = $request->address;
        $custome->neighborhood = $request->neighborhood;
        $custome->password = Hash::make($request->password); 
        $custome->confirm_password = Hash::make($request->confirm_password);
        $custome->save();
        
        echo '<script type="text/javascript">'; echo 'alert("Usuario registrado exitosamente")'; echo '</script>';
        return view('login'); 
        
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            echo '<script type="text/javascript">'; echo 'alert("Has iniciado sesión exitosamente")'; echo '</script>';
            return view('crearvehiculo');
        }
        echo '<script type="text/javascript">'; echo 'alert("credenciales incorrectas")'; echo '</script>';
        return view('login'); 
    // // Validar las credenciales
    // {
    

    //     // Validación de credenciales
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
        
    //     // Intentar autenticar al usuario
    //     if (Auth::attempt($credentials)) {
    //         // Regenerar la sesión
    //         $request->session()->regenerate();
        
    //         // Obtener el usuario autenticado
    //         $custome = Auth::user();
        
    //         // Verificar los roles del usuario
    //         // if ($user->Role('admin')) {
    //         //     return redirect()->route('admin.dashboard')->with('success', 'Has iniciado sesión como administrador.');
    //         // } elseif ($user->Role('conductor')) {
    //         //     return redirect()->route('conductor.dashboard')->with('success', 'Has iniciado sesión como conductor.');
    //         // } else {
    //         //     return redirect()->route('cliente.dashboard')->with('success', 'Has iniciado sesión como cliente.');
    //         // }
    //     }
        
    //     // Si las credenciales son incorrectas
    //     return redirect()->route('login')->withErrors(['email' => 'Credenciales incorrectas.']);
        
}

    
    


    public function getCities($departmentId)
{
    $cities = City::where('id_departament', $departmentId)->get();
    return response()->json($cities);
}

}


