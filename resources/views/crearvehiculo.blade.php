<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form action="{{ route('users.crearvehicle') }}" method="POST">
    @csrf

    <select name="id_tipo" id="id_tipo" required>
        <option value="">Seleccione Estado del vehiculo</option>
        @foreach($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
        @endforeach
    </select>

    <label for="placa">Placa:</label>
    <input type="text" name="placa" id="placa" value="{{ old('placa') }}" required>

    <label for="capacidad">Capacidad:</label>
    <input type="number" name="capacidad" id="capacidad" value="{{ old('capacidad') }}" required>


        <select name="id_estado" id="id_estado" required>
            <option value="">Seleccione Estado del vehiculo</option>
            @foreach($vehicleStatus as $vehicleStatu)
                <option value="{{ $vehicleStatu->id }}">{{ $vehicleStatu->name }}</option>
            @endforeach
        </select>


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