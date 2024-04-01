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
    </style>
</head>
<body>
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

