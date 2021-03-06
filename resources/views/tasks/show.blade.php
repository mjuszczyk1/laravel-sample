<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
            }
            html, body {
                color: #333;
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>{{$task->body}}</h1>
    </body>
</html>
