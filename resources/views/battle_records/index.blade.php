<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Pokemon Battle Record</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
       <h1 style="text-align:center">Pokemon Battle Record</h1>
       <div class='battle_records'>
           @foreach($battle_records as $battle_record)
                <div class='battle_record'>
                    <h2 class='title'>{{ $battle_record->now }}</h2>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">Record</a>
        </div>
    </body>
</html>
