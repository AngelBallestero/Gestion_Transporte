<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            height: 300px;


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

        footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2F3446;
            padding: 20px 40px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            opacity: 64%;
        }

        footer p {
            margin: 0;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        footer ul li {
            margin-left: 20px;
        }

        footer ul li a {
            text-decoration: none;
            color: #fff;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column; 
                align-items: flex-start; 
            }

            nav {
                flex-direction: column; 
                gap: 10px; 
            }
        }
        .doscolore{
            
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="">
                <img src="{{ asset('Img/Logo.png') }}" alt="Logo de la página">
            </a>
            <nav>
                <a href="">¿Quiénes Somos?</a>
                <a href="{{ route('users.index') }}">Servicio</a>
                <a href="{{ route('users.create') }}">Regístrate</a>
                <a href="{{ route('vehicles.create') }}">Ingresar</a>
            </nav>
        </header>

        <form action="{{ route('users.login') }}" method="POST">
            @csrf 
            <circle>      
                 <center>
                      <img class="imglogin" src="{{ asset('Img/logo.png') }}" alt="Logo de inicio de sesión">
                 </center>
            </circle>
            <br>
            <img class="imagen" src="{{ asset('Img/nombres.png') }}" alt="Campo de nombre">
            
           
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="passwords" required>

          
            <center>
                <a style="margin-top: 50px" href="">¿Olvidaste tu contraseña?</a>
            </center>
            <br>
            <center>
             
                <button type="submit">Iniciar Sesión</button>
                <br>
               
            </center>
        </form>
        
        <footer>
            <p>&copy; </p>
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </footer>
    </div>
</body>
</html>
