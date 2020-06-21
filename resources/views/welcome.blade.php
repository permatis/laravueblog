<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                padding: 0;
                margin: 0;
                font-size: 1.2rem;
            }
            .flex-center {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 2rem;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="flex-center">
                <app-component></app-component>
            </div>
        </div>  

    </body>
    <script type="text/javascript" src="{{mix('js/app.js')}}"></script>
</html>
