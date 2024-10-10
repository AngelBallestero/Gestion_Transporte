<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Cliente</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"],input[type="phone"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
        select{
            width: 97.5%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
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

        h1{
            font-size: 20px;
        }

    </style>
</head>
<body>
    <header>
        <a href="">
            <img src="{{ asset('Img/Logo.png') }}" alt="Logo de la página">
        </a>
        <nav>
            <a href="">¿Quiénes Somos?</a>
            <a href="{{ route('customers.index') }}">Servicio</a>
            <a href="{{ route('customers.create') }}">Regístrate</a>
            <a href="{{ route('vehicles.create') }}">Ingresar</a>
        </nav>
    </header>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
        <form action="{{ route('customers.store') }}" method="POST">
            <h1>Crear un nuevo Cliente</h1>
            @csrf
        <label for="id_document_type">Tipo de Documento:</label>
        <select name="id_document_type" id="id_document_type" required>
            <option value="">Seleccione un documento</option>
            @foreach($documentTypes as $documentType)
                <option value="{{ $documentType->id }}">{{ $documentType->name_document }}</option>
            @endforeach
        </select>

        <label for="document">Documento:</label>
        <input type="text" name="document" id="document" value="{{ old('document') }}" required>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        <label for="last_name">Apellido:</label>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required>

        <label for="phone">Telefono:</label>
        <input type="phone" name="phone" id="phone" value="{{ old('phone') }}" required>
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required>
            
            <label for="id_departament">Departamento:</label>
            <select name="id_departament" id="id_departament" required>
                <option value="">Seleccione un Departamento</option>
                @foreach($departaments as $departament)
                    <option value="{{ $departament->id }}">{{ $departament->name_departament }}</option>
                @endforeach
            </select>
        
            <label for="id_city">Ciudad:</label>
            <select name="id_city" id="id_city" required>
                <option value="">Seleccione una Ciudad</option>
            </select>
            <label for="address">Direccion:</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" required>

        <label for="neighborhood">Barrio:</label>
        <input type="text" name="neighborhood" id="neighborhood" value="{{ old('neighborhood') }}" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <label for="confirm_password">Confirmar Contraseña:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
            <!-- Resto de campos -->
            <!-- ... -->
            
            <center><button type="submit">Crear Usuario</button></center>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#id_departament').change(function() {
                    var departamentoId = $(this).val();
                    $('#id_city').empty().append();
                    if (departamentoId) {
                        $.ajax({
                            url: '/cities/' + departamentoId,
                            dataType: 'json',
                            success: function(data) {
                                $.each(data, function(key, value) {
                                    $('#id_city').append('<option value="' + value.id + '">' + value.name_city + '</option>');
                                });
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                                alert("Error al cargar las ciudades. Intente nuevamente.");
                            }
                        });
                    }
                });
            });
        </script>
        
</body>
</html>
