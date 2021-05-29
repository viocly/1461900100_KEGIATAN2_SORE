@extends('layout')
@section('judul','artikel')
@section('isi')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Artikel</title>
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
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NBI</td>
                    <td>Jenis Kelamin</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $sis)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sis->nama}}</td>
                    <td>{{$sis->nbi}}</td>
                    <td>{{$sis->jk}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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