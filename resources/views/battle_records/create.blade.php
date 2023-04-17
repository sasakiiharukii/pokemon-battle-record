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
        <h1>Pokemon Battle Record</h1>
        <form action="/records" method="POST">
            @csrf
            <div class="form-group1">
                <h2>your party</h2>
            　  @for ($i = 1; $i <= 6; $i++)
                    <label>{{ __('ポケモン名'. $i) }}<span class="pokemon_name">{{ __('任意') }}</span></label>
                    <input type="text" class="form-control{{ $errors->has('pokemon_name'. $i) ? ' is-invalid' : '' }}" name="pokemon_name{{ $i }}" value="{{ old('pokemon_name'. $i) }}">
                    @if ($errors->has('pokemon_name'. $i))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pokemon_name'. $i) }}</strong>
                        </span>
                    @endif
                @endfor
                        <div class="form-group2">
                            <h3>pokemon's item</h3>
                            @for ($i = 1; $i <= 6; $i++)
                                <label>{{ __('アイテム名'. $i) }}<span class="item_name">{{ __('任意') }}</span></label>
                                <input type="text" class="form-control{{ $errors->has('item_name'. $i) ? ' is-invalid' : '' }}" name="item_name{{ $i }}" value="{{ old('item_name'. $i) }}">
                                @if ($errors->has('item_name'. $i))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('item_name'. $i) }}</strong>
                                    </span>
                                @endif
                            @endfor
                        </div>
                                    <div class="form-group3">
                                        <h4>oponent party</h4>
                                    　  @for ($i = 1; $i <= 6; $i++)
                                            <label>{{ __('ポケモン名'. $i) }}<span class="pokemon_name">{{ __('任意') }}</span></label>
                                            <input type="text" class="form-control{{ $errors->has('pokemon_name'. $i) ? ' is-invalid' : '' }}" name="pokemon_name{{ $i }}" value="{{ old('pokemon_name'. $i) }}">
                                            @if ($errors->has('pokemon_name'. $i))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('pokemon_name'. $i) }}</strong>
                                                </span>
                                            @endif
                                        @endfor
                                    </div>
                                                <div class="form-group4">
                                                    <h5>pokemon's item</h5>
                                                    @for ($i = 1; $i <= 6; $i++)
                                                        <label>{{ __('アイテム名'. $i) }}<span class="item_name">{{ __('任意') }}</span></label>
                                                        <input type="text" class="form-control{{ $errors->has('item_name'. $i) ? ' is-invalid' : '' }}" name="item_name{{ $i }}" value="{{ old('item_name'. $i) }}">
                                                        @if ($errors->has('item_name'. $i))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('item_name'. $i) }}</strong>
                                                            </span>
                                                        @endif
                                                    @endfor
                                                </div>
                                                            <div class="form-group5">
                                                                <h6>your selected pokemon</h6>
                                                            　  @for ($i = 1; $i <= 3; $i++)
                                                                    <label>{{ __('ポケモン名'. $i) }}<span class="pokemon_name">{{ __('任意') }}</span></label>
                                                                    <input type="text" class="form-control{{ $errors->has('pokemon_name'. $i) ? ' is-invalid' : '' }}" name="pokemon_name{{ $i }}" value="{{ old('pokemon_name'. $i) }}">
                                                                    @if ($errors->has('pokemon_name'. $i))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('pokemon_name'. $i) }}</strong>
                                                                        </span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                                        <div class="form-group6">
                                                                            <h7>pokemon's item</h7>
                                                                        　  @for ($i = 1; $i <= 3; $i++)
                                                                                <label>{{ __('アイテム名'. $i) }}<span class="item_name">{{ __('任意') }}</span></label>
                                                                                <input type="text" class="form-control{{ $errors->has('item_name'. $i) ? ' is-invalid' : '' }}" name="item_name{{ $i }}" value="{{ old('item_name'. $i) }}">
                                                                                @if ($errors->has('item_name'. $i))
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $errors->first('item_name'. $i) }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            @endfor
                                                                        </div>
                                                                                    <div class="form-group7">
                                                                                        <h8>oponent selected pokemon</h8>
                                                                                        @for ($i = 1; $i <= 3; $i++)
                                                                                            <label>{{ __('ポケモン名'. $i) }}<span class="pokemon_name">{{ __('任意') }}</span></label>
                                                                                            <input type="text" class="form-control{{ $errors->has('pokemon_name'. $i) ? ' is-invalid' : '' }}" name="pokemon_name{{ $i }}" value="{{ old('pokemon_name'. $i) }}">
                                                                                            @if ($errors->has('pokemon_name'. $i))
                                                                                                <span class="invalid-feedback" role="alert">
                                                                                                    <strong>{{ $errors->first('pokemon_name'. $i) }}</strong>
                                                                                                </span>
                                                                                            @endif
                                                                                        @endfor
                                                                                    </div>　 
                                                                                                <div class="form-group6">
                                                                                                    <h9>pokemon's item</h9>
                                                                                                　  @for ($i = 1; $i <= 3; $i++)
                                                                                                        <label>{{ __('アイテム名'. $i) }}<span class="item_name">{{ __('任意') }}</span></label>
                                                                                                        <input type="text" class="form-control{{ $errors->has('item_name'. $i) ? ' is-invalid' : '' }}" name="item_name{{ $i }}" value="{{ old('item_name'. $i) }}">
                                                                                                        @if ($errors->has('item_name'. $i))
                                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                                <strong>{{ $errors->first('item_name'. $i) }}</strong>
                                                                                                            </span>
                                                                                                        @endif
                                                                                                    @endfor
                                                                                                </div>
            </div>
            <input type="submit" value="record">
        </form> 
    </body>
</html>
