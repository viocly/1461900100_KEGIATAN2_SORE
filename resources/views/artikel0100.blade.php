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
        <div class="cover">
            <div class="content">
                <h1>
                    <center>Bahasa Pemrograman</center>
                </h1>
                <ul>

                    <img src="https://static.cdn-cdpl.com/source/4/header-python-logo-flat-image700x350-crop-image700x350-crop-1-image(700x350-crop)-image(700x350-crop).png" alt="">
                    <p>
                        Python banyak digunakan oleh perusahaan besar dalam pengembangannya seperti NASA, Instragam, Google, Yahoo, Reddit, dan juga situs streaming video populer YouTube.

                        Jika dikategorikan dalam tingkatan bahasa komputer, Pyhton tergolong ke dalam bahasa pemrograman tingkat tinggi. Sama seperti Java, Phyton bisa untuk membangun aplikasi dari website dan mobile.

                        Popularitas Python sebesar 29.72% dari total responden berdasarkan pencarian yang dilakukan pada Google Search.

                        Jika dilihat dari pengguna Facebook, di Indonesia terdapat grup khusus membahas bahasa Python dan sudah lebih dari 23.000 akun yang bergabung.

                        Apabila Anda baru memulai belajar tentang pemrograman, Python termasuk bahasa yang cukup mudah untuk dipelajari. Selain itu masih banyak kelebihnya seperti, sintaks yang digunakan cukup sederhana. Pemuatan kembali secara dinamis modul phyton seperti memodifikasi aplikasi tanpa menghentikannya.

                        Meskipun mempunyai banyak kelebihan, masih ada beberapa kekurangan Python yang mungkin akan sedikit menyulitkan, seperti beberapa penugasan terdapat diluar dari jangkauan python.

                        Seperti bahasa pemrograman dinamis lainnya, Python tidak secepat atau efisien sebagai statis, tidak seperti bahasa pemrograman kompilasi seperti bahasa C.
                    </p>

                    <img src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2020/11/28124318/JavaScript-logo.png" alt="">
                    <p style="padding-top: 15px;">Sejarah JavaScript dimulai sekitar tahun 1994, ketika internet dan website sedang mengalami perkembangan yang pesat. Website pada saat itu umumnya dibuat menggunakan bahasa pemograman PERL yang pemrosesannya hanya bisa dilakukan di sisi web server.

                        Javascript menempati urutan ketiga dengan persentase pencarian 8.2%. Fungsi Javascript termasuk istimewa menurut saya, karena mampu mengembangkan website yang menarik dan interaktif. Maka banyak saat ini banyak website yang menggunakan Javascript pada kode program di dalamnya. Tidak mengherankan, karena Javascript pada awalnya memang dikembangkan dengan tujuan untuk membuat sebuah website.
                    </p>
                    <img src="https://cdn3.macworld.co.uk/cmsdata/features/3640347/learn_c_sharp_mac_osx_thumb800.jpg" alt="">
                    <p>
                        Pada akhir dekade 1990-an, Microsoft membuat program Microsoft Visual J++ sebagai sebuah langkah percobaan untuk menggunakan Java di dalam sistem operasi Windows untuk meningkatkan antarmuka dari Microsoft Component Object Model (COM).

                        Selanjutnya, terdapat C# dengan popularitas pencarian sebesar 7.28%. C# atau dibaca C Sharp menggabungkan prinsip C dan C++ dan dikembangkan oleh Miscrosoft. Jadi bahasa ini lebih banyak digunakan pada platform Windows untuk berjalan pada platform .NET. Karena tidak jauh dari C maupun C++, bahasa pemograman ini juga banyak digunakan untuk pengembangan game video.

                        Banyaknya operator serta fleksibilitas penulisan program kadang-kadang membingungkan pemakai ketika menggunakan bahasa ini, sedangkan bagi pemula pada umumnya akan kesulitan menggunakan pointer.

                        C# mempunyai beberapa kelebihan yang dapat dijadikan sebagai bahan pertimbangan seperti flexible, powerful, easy to use.
                    </p>
                    <img src="https://www.niagahoster.co.id/blog/wp-content/uploads/2019/11/bahasa-pemrograman-php.png" alt="">
                    <p style="padding-top: 15px;">
                        Popularitas PHP sebagai bahasa pemrograman untuk website sebesar 6.09% pada pencarian di Google Search dan lebih dari 10 juta website di dunia sudah menggunakan bahasa ini.

                        Sejak dikembangkan pada tahun 1994, PHP menjadi bahasa komputer yang populer di kalangan web developer untuk mengembangkan website. Banyak website besar menggunakan bahasa ini sebagai salah satu komponennya. Sebagai contoh Content Management System (CMS) seperti WordPress dan Joomla dibuat dengan bahasa pemrograman dasar PHP. Facebook dan Wikipedia juga menjadi salah satu penggunanya.
                        PHP adalah sebuah bahasa script yang tidak melakukan sebuah kompilasi dalam penggunaannya. Web Server yang mendukung PHP dapat ditemukan dimana–mana dari mulai Apache, IIS, Lighttpd, hingga Xitami dengan konfigurasi yang relatif mudah. Dalam sisi pengembangan lebih mudah, karena banyaknya milis–milis dan developer yang siap membantu dalam pengembangan.

                        PHP memiliki kelemahan security tertentu apabila programmer tidak jeli dalam melakukan pemrograman dan kurang memperhatikan isu dan konfigurasi PHP. Tidak ideal untuk pengembangan skala besar. Berbeda dengan Java, fungsi bahasa pemrograman ini tidak memiliki sistem pemrograman berorientasi objek yang sesungguhnya (sampai versi 4 ini). Tidak bisa memisahkan antara tampilan dengan logik dengan baik (walau penggunaan template dapat memperbaikinya).
                    </p>
                    <img src="https://www.niagahoster.co.id/blog/wp-content/uploads/2018/05/bahasa-pemrograman.jpg" alt="">
                    <p>
                        Yukihiro merupakan programmer asal jepang yang membuat bahasa komputer Ruby. Pada tahun 1993 Yukihiro ingin membuat sebuah bahasa skripting yang memiliki kemampuan orientasi objek. Pada saat itu pemrograman berorientasi objek sedang berkembang tetapi belum ada bahasa pemrograman scripting yang mendukung pemrograman objek.

                        Ruby mempunyai struktur sintaks yang sangat sederhana sehingga banyak pengembang website menggunakan bahasa ini. Komunitas yang berkembang dengan dukungan teknologi dan dependency pihak ketiga yang lengkap menjadi faktor lain yang membuat ruby cukup populer. Persentase pencarian pada bahasa ini sekitar 1.7 %, tidak terlalu banyak, namun cukup membuat Ruby masuk ke daftar bahasa komputer yang banyak diminati.
                    </p>
                </ul>
            </div>
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