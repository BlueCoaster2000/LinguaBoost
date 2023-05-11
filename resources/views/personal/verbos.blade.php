<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>

<body>

    @include('partials.nav2')
    <main>
        <h2 class="text-center">Consulta tus verbos aquí</h2>
        <table class="table tabla">
            <thead>
                <tr>
                    <th scope="col">ENGLISH</th>
                    <th scope="col">Verbo en inglés</th>
                    <th scope="col">Verbo en español</th>
                    <th scope="col">Tiempo Presente</th>
                    <th scope="col">Tiempo Pasado</th>
                    <th scope="col">Clasificación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ask</td>
                    <td>Preguntar</td>
                    <td>ask, asks</td>
                    <td>asked</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Be</td>
                    <td>ser o estar</td>
                    <td>am, are, is.</td>
                    <td>was</td>
                    <td>Irregular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Come</td>
                    <td>Venir</td>
                    <td>come, comes</td>
                    <td>came</td>
                    <td>Irregular</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Do</td>
                    <td>Hacer</td>
                    <td>do, does</td>
                    <td>did</td>
                    <td>Irregular</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Feels</td>
                    <td>sentir</td>
                    <td>feels, feels</td>
                    <td>felt</td>
                    <td>Iregular</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Find</td>
                    <td>Encontrar</td>
                    <td>find, finds</td>
                    <td>found</td>
                    <td>Irregular</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Get</td>
                    <td>tomar</td>
                    <td>get, gets</td>
                    <td>got</td>
                    <td>Iregular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Call</td>
                    <td>llamar</td>
                    <td>call, calls</td>
                    <td>called</td>
                    <td>Regular</td>
                </tr>

            </tbody>
        </table>
    </main>

    @include('partials.footer')