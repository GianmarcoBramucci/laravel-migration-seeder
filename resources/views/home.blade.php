<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <ul>
            @foreach ($trains as $train)
            <li>
                <span>{{ $train->codice_treno }}</span>
                <span>{{ $train->azienda }}</span>       
                <span>{{ $train->stazione_di_partenza }}</span>    
                <span>{{ $train->stazione_di_arrivo }}</span>    
            </li>
            @endforeach    
        </ul>
    </main>

</body>

</html>