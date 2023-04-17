<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Pokemon Battle Record</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    </head>
    <body class="antialiased">
       <h1 class="page_title">Pokemon Battle Record</h1>
       <a href="/">back</a>
       <div class='battle_records'>
            <h2 class='title'>{{ $battle_record->selected_pokemon1_id }}</h2>  
            //selected_pokemon1_idを変えてリレーションを行う（モデルを作る）
        </div>
    </body>
</html>
