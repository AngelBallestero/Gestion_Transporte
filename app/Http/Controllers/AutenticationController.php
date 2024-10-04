<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Document_type;
use App\Models\Departament;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 


class AutenticationController extends Controller
{
    public function index()
    {
        $User = User::all();
        return response()->json(['message' => $User], 404);  
    }
  

     public function show($id){
     $User = User::find($id);
         if ($User) {  
             return response()->json(User, 200);
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
                'id_document_type' =>'required|string|',
                'document' => 'required|string|',
                'name' => 'required|string|',
                'last_name' => 'required|string|',
                'phone' => 'required|string|',
                'email' => 'required|string|email|max:255|unique:users',
                'id_departament' => 'require|string|',
                'id_city' => 'required|string|',
                'address' => 'required|string|',
                'neighborhood' => 'required|string|',
                'password' => 'required|string|min:8', 
                'confirm_password' => 'required|string|',
            ]);
        
            $user = new User();
            $user->id_document_type = $request->id_document_type;
            $user->document= $request->document;
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->departament = $request->departament;
            $user->city = $request->city;
            $user->address = $request->address;
            $user->neighborhood = $request->neighborhood;
            $user->password = Hash::make($request->password);
            $user->confirm_password = $request->confirm_password;
            $user->save();
     
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
    }
    
    public function datos(){
        return view('mostrardatos');
    }  
}



