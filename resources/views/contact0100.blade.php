@extends('layout')
@section('judul','contact')
@section('isi')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
    <!-- WEB FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- CUSTOM STYLING -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- PRELOADER -->
    <link href="css/loader.css" rel="stylesheet">

    <style>
        .image {
            background-image: url('img/bg1.jpeg');
            background-color: #eaeaea;
            background-size: cover;
            border-radius: 100px;
            width: 150px;
            height: 150px;
            margin: 0 auto;
            border: 1px solid #eaeaea;
        }

        li {
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- PRELOADER -->
    <div id="loader-wrapper">
        <div id="loader">
            <div class="sk-spinner sk-spinner-cube-grid">
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
                <div class="sk-cube"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="cover">
            <div class="main">
                <div class="image"></div>
                <h1>Vio Kartiko</h1>
                <div class="text">
                    <strong>Contact Person :</strong>
                </div>
                <ul>
                    <li><a href="#"><img src="{{url('img/ig.png')}}" width="25px" height="25px"></a> : viocly_</li>
                    <li><a href="#"><img src="{{url('img/fb.png')}}" width="25px" height="25px"></a> : Vio Kartiko</li>
                    <li><a href="#"><img src="{{url('img/link.png')}}" width="25px" height="25px"></a> : Vio Kartiko</li>
                    <li><a href="#"><img src="{{url('img/wa1.png')}}" width="50px" height="25px"></a> : +62 831 0080 9572</li>
                    <li><a href="#"><img src="{{url('img/gmail.png')}}" width="50px" height="30px"></a> : viokartiko21@gmail.com</li>
                </ul>

            </div>
            <br><br><br><br><br>
            <br><br><br><br>

        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SMOOTH SCROLL -->
    <script src="js/smooth-scroll.min.js"></script>
    <!-- PARALLAX IMG -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- SCROLL REVEAL -->
    <script src="js/scrollReveal.min.js"></script>
    <!-- FUNCTIONS -->
    <script src="js/functions.js"></script>


</body>

</html>
@endsection