<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel TV Maze Api</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin-top: 1%;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: 100;
            }

            .label, .input, .submit {
                font-size: 20px;
            }

            input[type="text"] {
              padding: 5px;
              border: solid 1px #fff;
              box-shadow: inset 1px 1px 2px 0 #707070;
              transition: box-shadow 0.3s;
            }
            input[type="text"]:focus,
            input[type="text"].focus {
              box-shadow: inset 1px 1px 2px 0 #c9c9c9;
            }

            input[type=submit] {
                padding:5px 15px; 
                background:#ccc; 
                border:0 none;
                cursor:pointer;
                -webkit-border-radius: 5px;
                border-radius: 5px; 
            }

            input[type=submit]:hover {
                background:#abc; 
            }

            .label {
                padding-right:10px;
            }

            .links > a {
                color: #636b6f;
                padding: 0px 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-t-md {
                margin-top: 30px;
            }

            ul {
                list-style-type: none;
                padding:0;
            }

            li {
                padding: 2px;
                letter-spacing: .05rem;
            }

        </style>
    </head>

    <body>
         @yield('content')
    </body>
</html>