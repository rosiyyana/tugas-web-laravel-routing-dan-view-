<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Portofolio</title>
  </head>
  <body>
  <!-- navbar --> 
    <nav class="navbar navbar-expand-lg col-md-10" style="background : #050505; margin-left :312px; width :1035px">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item" style="margin-left : 570%">
                <a class="nav-link " style="color : #e4f9ff" href="/experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-1" style="color : #e4f9ff" href="/profil">Profil</a>
            </li>
        </li>
      </ul>
  </div>
</nav>
    <div class="row ">
        <div class="sidebar col-md-3">
            <div class="portopolio text-center " style=" height : 486px ; background : #050505 ; margin-top : -57px">
                <p class="text-white pt-4"> <b> Portofolio. </b></p>
                <img src="{{('image/portopolio.JPG')}}" width="190px" style="margin-top : 138px">
                <!-- <p class="text-white bg-warning"  style=" margin-left : 100px">MY NAME IS <br> <b style="margin-left : -7px"> ROSIYANA </b></p> -->

            </div>
            
        </div>
   
    <div class="row ">   
        <img src="{{('image/bg2.JPG')}}" width="1032px" style="margin-top:-186px" >
    </div>

</div>
  
  <section  style="background: #ececec" >
      <div class="container">
        <div class="row p-3">
          <div class="col-md-12 text-center"></div>
          </div>
        <div class="row p-2">
      <div class="col-md-6"style="margin-top : -20px;">
  <br>
      <img class="rounded-circle"src="{{('image/ide.png')}}" width="230" style=" margin-left : 100px; margin-top:-16px" >
  </div>


  <div class="col-md-6 text-justify " style="margin-top : -4px; margin-left:-3px">
      <p>Beberapa dokumentasi aplikasi yang sudah saya pelajari disekolah bisa dibilang sebagai tugas sekolah seperti membuat Ajax-Noloading, Autocomplete, Menampilkan data dari DB menggunakan PHP Ajax, Telebot, dan masih banyak lain nya.</p>
          <img class="rounded-circle col-md-3"src="{{('image/logorpl.jpg')}}" width="210" style=" margin-left : 250px; margin-top:3px" >      
          <img class="rounded-circle col-md-3"src="{{('image/logotb.jpg')}}" width="210" style=" margin-left : 397px; margin-top:-130px" >      
  <br>
  </div>
  </div>
  </section>


  <div class="jumbotron text-center" style="background : #092532">
  <b><p class="text-white"style="font-size:18px;">Portofolio.</p></b>
  <br>
  <div class="card-deck">
  <div class="card">
    <img src="{{('image/bot2.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bot Telegram</h5>
      <p class="card-text">Membuat Telegram Bot menggunakan bahasa pemrograman python.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{('image/autocom.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Autocomplete Pencarian</h5>
      <p class="card-text">Membuat Autocomplete dengan gambar dan ajax menggunakan bahasa pemrogramman php.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
    <img src="{{('image/iventory.png')}}" class="card-img-top" alt="...">
      <h5 class="card-title mt-1">Iventory</h5>
      <p class="card-text">Membuat iventory barang menggunakan php.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>

    </div>
  </div>
  <div class="card">
    <img src="{{('image/ajaxno.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title mt-1">CRUD Ajax No Loading</h5>
      <p class="card-text">Membuat CRUD Ajax no loading dengan menggunakan bahasa pemrograman php ajax.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>
      <img src="{{('image/tamp_db.png')}}" class="card-img-top" alt="...">
      <h5 class="card-title">Tampil Data dari Database</h5>
      <p class="card-text">Membuat tampildata dari database menggunakan php ajax.</p>
      <p class="card-text"><small class="text-muted">Diposting 2 Menit Lalu</small></p>

    </div>
  </div>
</div>
</div>
<br>
<footer><center>&copy; Copyright 2020 | by : @Rosi_Yana</center></footer><br>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>