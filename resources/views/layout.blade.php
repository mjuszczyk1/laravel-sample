<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks, not blog...</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
            }
            html, body {
                color: #333;
                font-family: 'Raleway', sans-serif;
            }
            li.completed {
                text-decoration: line-through;
            }
            ul.tasks li > a {
                color: #987654;
                text-decoration: none;
                font-weight: 700;
                border-bottom: 1px dashed;
            }
            ul.tasks li > :hover {
                color: darkred;
                border-bottom: 0;
                text-decoration: none;
            }
            .no-marg{
                margin: 0;
            }
            .no-top-marg{
                margin-top: 0;
            }
            .task-title-row {
                position: relative;
            }
            .task-title-row .action-col {
                position: absolute;
                right:0;
                bottom: 0;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tasks</a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/tasks">All Tasks</a></li>
                        <li><a href="/tasks/incomplete">Incomplete Tasks</a></li>
                        <li><a href="/tasks/add">Add Task</a>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container">
            @yield('content')
        </main>
    </body>

    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
 