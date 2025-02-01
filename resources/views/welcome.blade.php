<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body class="">
        @isset($username)
        <h1>Welcome {{ $username }}</h1>
        @endisset

        @if(1==2)
        <h1>Condition is true</h1>
        @else
        <h1>This is else Condition</h1>
        @endif

        <!-- Loops -->
         @empty($user)
         <h2>@uppercase("No username list!")</h2>
         @endempty
         <ul>
            @foreach($user as $value)
            <li>{{ $value }}</li>
            @endforeach
         </ul>
    </body>
</html>
