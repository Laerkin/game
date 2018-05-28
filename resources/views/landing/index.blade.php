<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>WELCOME</title>
    <style>

        body {
            background-image: url("#");
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            background-color: #464646;
            font-size: 20px;
        }

        .box1 {
            text-align: center;
            font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
            -webkit-border-radius: 10px 10px 10px 10px;
            box-shadow: #5ea6dc;
            border-radius: 10px 10px 10px 10px;

            margin-right: 25%;
            padding: 10px;
            text-shadow: 0 3px 15px #5291FF;
            position:absolute;
            left: 50%;
            top: 40%;
            width: 200px;
            height: 200px;
            margin-left: -100px;
            margin-top: -100px;
        }
        a{
            text-decoration:none;
        }
        .box1 a{
            background-color: #d8c15e;
            font-size: large;
            border-radius: 10px 10px 10px 10px;
            color: black;
            padding: 5px;
        }
        .box1 a:hover{
            background-color: #fff38e;
            font-size: large;
            border-radius: 10px 10px 10px 10px;
            color: black;
            padding: 5px;
        }

        .foreground, .midground, .background {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            translate3d(0,0,0);
        }

        .foreground {
            animation: parallax_fg linear 10s infinite both;
            background:  url(https://coclouds.com/wp-content/uploads/2014/11/afternoon-various-clouds-2014-07-11.jpg) 0 100% repeat-x;
            z-index: 3;
        }

        @keyframes parallax_fg {
            0% { background-position: -200px 100%;}
            100% {background-position: 0 100%; }
        }

        .card{
            z-index: 99;
        }

    </style>
</head>
<body>

<div class="container-fluid ">

    <div class="row">
        <div class=" offset-4 col-md-4 offset-4">
            <div class="box1 jumbotron card card-block">
                <h2>
                    game-travel
                </h2>
                <p>
                    Ne laissez pas une aventure s'envoler sans vous !
                </p>
                <br/>
                    <a class="btn btn-primary btn-large" href="{{ url('login') }}"> Login</a>
                <br>
                <br>

                    <a class="btn btn-primary btn-large" href="{{ url('register') }}"> Register</a>
                





            </div>
        </div>
    </div>
</div>

<div class="foreground"></div>

</div>





</body>
</html>