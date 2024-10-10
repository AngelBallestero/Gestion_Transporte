<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #5FD0F6; 
            padding: 20px 40px; 
            width: 95.4%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        }

        header img {
            height: 50px; 
        }

        nav {
            display: flex;
            gap: 20px; 
        }

        nav a {
            text-decoration: none; 
            color: #ffffff; 
            font-weight: bold; 
            transition: color 0.3s; 
        }

        nav a:hover {
            color: #3cbfe785;
        }

        form {
            background: linear-gradient(to right, #5FD0F6, #2196F3);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 250px;
            margin: 50px auto;
            height: 500px;


        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #009FC6;
            border-radius: 4px;
            border:#009FC6;
        }

        button {
            background-color: #009FC6;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 20px;
            cursor: pointer;
            width: 50%;

        }

        button:hover {
            background-color: #4cae4c;
        }

        .imglogin {
            height: 50px;
        }

        .imagen {
            height: 20px;
        }
        select{
            width: 97.5%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

</style>
<body>
    <header>
        <a href="">
            <img src="{{ asset('Img/Logo.png') }}" alt="Logo de la página">
        </a>
        <nav>
            <a href="">¿Quiénes Somos?</a>
            {{-- <a href="{{ route('vehicles.index') }}">Servicio</a> --}}
            <a href="{{ route('customers.create') }}">Regístrate</a>
            <a href="{{ route('vehicles.create') }}">Ingresar</a>
        </nav>
    </header>
<form action="{{ route('vehicles.store') }}" method="POST">
    @csrf

    <label for="placa">Tipo Vehiculo:</label>
    <select name="id_tipo" id="id_tipo" required>
        <option value="">Seleccione Estado del vehiculo</option>
        @foreach($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
        @endforeach
    </select>

    <label for="placa">Placa:</label>
    <input type="text" name="placa" id="placa" value="{{ old('placa') }}" required>

    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}" required>

    <label for="capacidad">Capacidad:</label>
    <input type="text" name="capacidad" id="capacidad" value="{{ old('capacidad') }}" required>

    <label for="capacidad">Estado Vehiculo:</label>
    <select name="id_estado" id="id_estado" required>
        <option value="">Seleccione Estado del vehiculo</option>
            @foreach($vehicleStatus as $vehicleStatu)
            <option value="{{ $vehicleStatu->id }}">{{ $vehicleStatu->name }}</option>
        @endforeach
    </select>

    <label for="consumo_de_combustible">Consumo_de_combustible:</label>
    <input type="text" name="consumo_de_combustible" id="consumo_de_combustible" value="{{ old('consumo_de_combustible') }}" required>


    <center><button type="submit">Crear Vehículo</button></center>

    {{-- Mostrar errores de validación --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>

</body>
</html>