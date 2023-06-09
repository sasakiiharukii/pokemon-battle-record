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
       <a href="/battle_records/create">record</a>
       <div class='battle_records'>
           @foreach($battle_records as $battle_record)
                <div class='battle_record'>
                    <a href="/records/{{ $battle_record->id }}">
                    <h2 class='title'>{{ $battle_record->created_at }}</h2>
                    </a>
                </div>
            @endforeach
        </div>
    </body>
</html>
