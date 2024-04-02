<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Résultat de la recherche</title>
    <style>
    
       body {
            font-family: Arial, sans-serif;
            background: url("./imgs/a2.jpg") no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: linear-gradient(rgb(151, 103, 177),rgb(120, 98, 211));
            border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            margin-top: 100px;
        }
        h1 {
            color: white;
            font-size: 50px;
            text-align: center;
            margin-bottom: 20px;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            
            border-radius: 5px;
        }
        .result p {
            color: black;
            font-size: 40px;
            font-family: roboto;
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
        <h1>Résultat de la recherche</h1>
        <div class="result">
            @if(isset($employe))
                <p>L'employé attribué à ce bien est : <span style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">{{ $employe->nom_complet }}</span></p>
            @else
                <p>Aucun employé n'est attribué à ce bien.</p>
            @endif
        </div>
    </div>
</body>
</html>

