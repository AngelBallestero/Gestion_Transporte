<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
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
            max-width: 280px;
        
            margin: 0 auto;
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
    </style>
</head>
<body>
    <h1>Crear un nuevo Usuario</h1>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
     
     
        <label for="id_document_type">Tipo de Documento:</label>
        <select name="id_document_type" id="id_document_type" required>
            <option value="">Seleccione un tipo de documento</option>
            @foreach($documentTypes as $documentType)
                <option value="{{ $documentType->id }}">{{ $documentType->name }}</option>
            @endforeach
        </select>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        
        <center><button type="submit">Crear Usuario</button></center>
  
</body>
</html>
