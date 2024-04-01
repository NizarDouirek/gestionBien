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
        background: linear-gradient(rgb(206, 114, 255), rgb(105, 79, 206));
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
        color: black;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    tr:hover {
        background: linear-gradient(80deg, rgb(160, 92, 197), rgb(124, 102, 214));
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
</style>

<body>
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
                                    <button type="submit">Retourner le bien</button>
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
