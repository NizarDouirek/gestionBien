<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'attribution</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./imgs/a.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 700px;
            margin: 50px auto;
            background: transparent;
            padding: 60px;
            backdrop-filter: blur(15px) brightness(80%);
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        select {
            appearance: none;
            width: 100%;
            padding: 20px;
            height: 60px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 70px;
            background-color: transparent;
            color: wheat;
            font-weight: bold;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        select:hover {
            border-color: #ccc;
            font-weight: bold;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        option {
            background-color: rgb(102, 66, 164);
            color: black;
        }

        h1 {
            color: rgb(255, 160, 99);
            text-align: center;
            font-family: roboto;
            margin-bottom: 20px;
            font-size: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        select,
        button {
            padding: 10px 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            height: 50px;
            border-radius: 40px;
            background: linear-gradient(80deg, rgb(255, 114, 142), rgb(255, 160, 99));
            border: none;
            color: white;
            letter-spacing: 0.1cm;
            outline: none;
            font-family: roboto;
            cursor: pointer;
            font-size: 1.4em;
            font-weight: 600;
        }
        .navbar {
            background-color: rgb(221, 233, 248,0.7)!important;
            display: flex;
            /* background: linear-gradient(rgb(123, 104, 133),rgb(107, 100, 134)); */
            backdrop-filter: blur(15px) brightness(80%);
            margin-bottom: 40px;
            position: relative;
            position: fixed;
            top: 0; 
            width: 100%;
            padding: 2px; /* Ajustez selon vos besoins */
            backdrop-filter: 20;
            align-items: center;
        }
        
        .navbar-nav .nav-link {
            color: rgb(8, 22, 38) !important; /* Couleur du texte des liens */
            font-size: 1.2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            /* margin-left: 50px; */   
        } 
        .navbar-nav {
            display: flex;
            list-style: none; 
            gap: 2rem;
        }
        a{
            text-decoration-line: none;
        }

        .logo{
            width: 170px;
            margin-left: 5px;
        }
        .msg{
            margin-right: 150px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        
        <img src="/imgs/logo.png" alt="" class="logo">
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 50px">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ajouterBien') }}">Ajouter un Bien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ajouterEmploye') }}">Ajouter un Employé</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/attribuer') }}">Attribuer un Bien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/attributions') }}">Liste des Attributions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/recherche') }}">Recherche</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        
        <h1>Formulaire d'attribution</h1><br>
        <form action="/attribuer-traiter" method="post">
            @csrf
            <select name="id_bien" id="" required>
                <option value="" disabled selected>Sélectionner le bien</option>
                @foreach ($biens as $bien)
                    <option value="{{ $bien->id }}">{{ $bien->code }}</option>
                @endforeach
            </select>
            <select name="id_employe" id="" required>
                <option value="" disabled selected>Sélectionner l'employé</option>
                @foreach ($employes as $employe)
                    <option value="{{ $employe->id }}">{{ $employe->nom_complet }}</option>
                @endforeach
            </select><br>
            <button type="submit">Attribuer</button>
        </form>
    </div><br>
    <div class="msg">
    @if(session('succes'))
    <h1>{{session('succes')}}</h1>
    @endif
   </div>
</body>

</html>
