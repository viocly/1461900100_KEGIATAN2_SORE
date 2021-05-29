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
        <h6>Menampilkan nama dan nis</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NBI</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswaselect as $siss)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$siss->nama}}</td>
                    <td>{{$siss->nis}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h6>menampilkan siswa nis 1001</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NIS</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswawhere as $sisw)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sisw->nama}}</td>
                    <td>{{$sisw->nis}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h6>Menampilkan absen dan siswa dengan nis yang sama</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NBI</td>
                    <td>absen</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswajoin as $sisj)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sisj->nama}}</td>
                    <td>{{$sisj->nis}}</td>
                    <td>{{$sisj->absen}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h6>Menampilkan absen A</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NBI</td>
                </tr>
            </thead>
            <tbody>
                @foreach($siswajoinlike as $sisjl)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$sisjl->nama}}</td>
                    <td>{{$sisjl->nis}}</td>
                    <td>{{$sisjl->absen}}</td>
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