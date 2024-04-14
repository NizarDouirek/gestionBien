<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des attributions</title>
</head>
<style>
    body {
        background: url("./imgs/a1.jpg") no-repeat;
    }

    table {
        background: linear-gradient(rgb(42, 61, 102), rgb(16, 31, 52));
        /* background: linear-gradient(rgb(206, 114, 255), rgb(105, 79, 206)); */
        /* background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99)); */
        color: white;
        font-size: 1.2rem;
        border-collapse: collapse;
        width: 80%;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    h2 {
        color: white;
        font-family: 'roboto';
        font-size: 30px;
        text-align: center;
    }

    th {
        color: rgb(235, 217, 221);
        text-transform: uppercase;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    tr:hover {
        background: linear-gradient(80deg, rgb(97, 69, 112), rgb(86, 76, 124));
    }

    button {
        width: 70%;
        padding: 10px;
        font-size: 18px;
        background: linear-gradient(80deg, rgb(255, 114, 142), rgb(255, 160, 99));
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        transition: background 0.3s ease;
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
            /* padding: 2px; Ajustez selon vos besoins */
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
        <h2>Liste des attributions</h2>
        <div class="card-body">
            <table>
                <tr>
                    <th>Code_bien</th>
                    <th>Nom_Employe</th>
                    <th>Date d'attribution</th>
                    <th>Date de retour</th>
                </tr>
                @foreach ($attributions as $attribution)
                    <tr>
                        <td>{{ $attribution->code }}</td>
                        <td>{{ $attribution->nom_complet }}</td>
                        <td>{{ $attribution->date_attribution }}</td>
                        <td>
                            @if (!empty($attribution->date_retour))
                                {{ $attribution->date_retour }}
                            @else
                                <form action="{{ route('attribution.return', $attribution->id) }}" method="POST"
                                     onsubmit="return confirm('Êtes-vous sûr de vouloir retourner ce bien ?')">

                                    @csrf
                                    <input type="hidden" value='{{$attribution->id_bien}}' name="id_bien">
                                    <button type="submit">Retourner le bien </button>
                                </form>
                            @endif
                        </td>


                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
