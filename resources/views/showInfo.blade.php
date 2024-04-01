<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background: url("./imgs/a1.jpg") no-repeat;
        }
        h1{
            color: white;
            font-family: roboto;
            text-align: center;
            margin-bottom: 10px;
            color: rgb(255, 171, 74);
            text-decoration-line:underline;
        }
        table {
            background: linear-gradient(rgb(206, 114, 255),rgb(105, 79, 206));
            /* background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99)); */
            color: white;
            font-size: 1.2rem;
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            margin-bottom: 40px;
        }
        th{
            color: black;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        tr:hover {
            background: linear-gradient(80deg,rgb(160, 92, 197),rgb(124, 102, 214));
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
    justify-content: center;
   
}

.pagination li {
    list-style: none;
    margin: 0 5px;
}

.pagination a {
    padding: 8px 12px;
    text-decoration: none;
    background:linear-gradient(80deg,rgb(255, 114, 142),rgb(255, 160, 99));
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.pagination a:hover {
    background-color:  rgb(231, 189, 141);
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



    </style>
</head>
<body>
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
