<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: url("./imgs/a1.jpg") no-repeat;
        }
        
        h1{
            color: white;
            font-family: roboto;
            margin-left: 150px;
            margin-bottom: 10px;
            color: rgb(255, 171, 74);
        
        }
        table {
            /* background-color: rgb(42, 61, 102); */
            opacity:30px;
            background: linear-gradient(rgb(42, 61, 102),rgb(16, 31, 52));
            /* background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99)); */
            color: white;
            font-size: 1.2rem;
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        th{
            color: rgb(235, 217, 221);
            text-transform: uppercase;
            
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        tr:hover {
            background: linear-gradient(80deg,rgb(42, 61, 102),rgb(62, 57, 83));
        }
        .actions a {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
            margin-right: 5px;
        }
    .pagination {
    display: flex;
    margin-left: 150px;
    /* justify-content: center; */
   
}

.pagination li {
    list-style: none;
    margin: 0 5px;
}

.pagination a {
    padding: 8px 12px;
    text-decoration: none;
    background:linear-gradient(80deg,rgb(131, 78, 89),rgb(146, 106, 81));
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.pagination a:hover {
    background-color:  rgb(202, 164, 120);
}

.pagination .disabled {
    pointer-events: none;
    opacity: 0.5;
}



.pagination .prev,
.pagination .next {
    padding: 8px 20px;
    background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));
    font-family: robotot;
    font-size: 1.2rem;
    margin-bottom: 50px;
    border-radius: 5px;
    
}

  .n{
        margin-left: 35%;
        
        max-width: 960px; 
        backdrop-filter: blur(15px) brightness(80%);
   }
    .navbar {
            background-color: rgb(221, 233, 248,0.7)!important;
          
            /* background: linear-gradient(rgb(123, 104, 133),rgb(107, 100, 134)); */
            backdrop-filter: blur(15px) brightness(80%);
            margin-bottom: 40px;
            position: relative;
            padding: 10px; /* Ajustez selon vos besoins */
            backdrop-filter: 20
        }
        
        .navbar-nav .nav-link {
            color: rgb(8, 22, 38) !important; /* Couleur du texte des liens */
            font-size: 1.2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
            /* margin-left: 50px; */
            
        }
        
        
        .logo{
            width: 160px;
            
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
    
    @if (session('success'))
    <h2 style="color: #57d85e">{{ session('success') }}</h2>
    @endif
    <h1>liste Bien</h1>
    <table>
        <thead>
            <tr>
                
                <th>Code</th>
                <th>Description</th>
                <th>Marque</th>
                <th>État</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biens as $bien)
            <tr>
               
                <td>{{$bien->code}}</td>
                <td>{{$bien->description}}</td>
                <td>{{$bien->marque}}</td>
                <td>{{$bien->etat}}</td>
                <td class="actions">
                    <a style="background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));" href="/modifierBien/{{$bien->id}}">Modifier</a>
                    <a style="background:linear-gradient(80deg,rgb(168, 67, 87),rgb(182, 119, 81));" href="/supprimerBien/{{$bien->id}}">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        @if ($biens->previousPageUrl())
            <a class="prev" href="{{ $biens->previousPageUrl() }}">Précédent</a>
        @endif
    
        @if ($biens->hasMorePages())
            <a class="next" href="{{ $biens->nextPageUrl() }}">Suivant</a>
        @endif
    </div><br>
    <h1>liste Employe</h1>
    <table>
        <thead>
            <tr>
                <th>Nom complet</th>
                <th>Numéro d'Identification</th>
                
                <th>Téléphone</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employes as $employe)
            <tr>
                <td>{{$employe->nom_complet}}</td>
                <td>{{$employe->num_Identification}}</td>
                
                <td>{{$employe->num_telephone}}</td>
                <td class="actions">
                    <a style="background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));" href="/modifierEmploye/{{$employe->id}}">Modifier</a>
                    <a style="background:linear-gradient(80deg,rgb(168, 67, 87),rgb(182, 119, 81));" href="/supprimerEmploye/{{$employe->id}}">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        @if ($employes->previousPageUrl())
            <a class="prev" href="{{ $employes->previousPageUrl() }}">Précédent</a>
        @endif
    
        @if ($employes->hasMorePages())
            <a class="next" href="{{ $employes->nextPageUrl() }}">Suivant</a>
        @endif
    </div>
</body>
</html>
