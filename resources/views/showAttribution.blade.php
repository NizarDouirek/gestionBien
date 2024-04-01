<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Recherche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./imgs/a.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 800px;
            background: transparent;
            backdrop-filter: blur(15px) brightness(80%);
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 70px;
            text-align: center;
        }

        .search-form h2 {
            margin-bottom: 70px;
            font-size: 45px;
            color: rgb(255, 160, 99);
        }

        .select-box {
            position: relative;
            margin-bottom: 30px;
        }

        .select-box select {
            appearance: none;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
            background-color: transparent;
            color: wheat;
            font-weight: bold;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .select-box::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #333;
            pointer-events: none;
        }

        option {
            background-color: rgb(102, 66, 164);
            color: black;
        }

        .select-box select:hover {
            border-color: #ccc;
            font-weight: bold;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        button[type="submit"] {
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
            font-size: 1.3em;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/recherche-resultat" method="POST" class="search-form">
            @csrf
            <h2>Recherche de Biens</h2>
            <div class="select-box">
                <select name="id_bien" id="bien" required>
                    <option value="" disabled selected>Choisissez un bien</option>
                    @foreach ($biens as $bien)
                        <option value="{{ $bien->id }}">{{ $bien->code }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Rechercher</button>
        </form>
    </div>
</body>

</html>
