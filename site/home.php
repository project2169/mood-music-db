<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
      /* nav bar */
      .nav-pills .pills-1 .nav-link:not(.active) {
        background-color: white;
        color: blue;
      }

      .nav-pills .pills-2 .nav-link:not(.active) {
        background-color: white;
        color: blue;
      }

      .nav-pills .pills-3 .nav-link:not(.active) {
         background-color: white;
         color: blue;
      }
      .nav-pills .pills-1 .nav-link {
        background-color: white;
        color: black;
      }

      .nav-pills .pills-2 .nav-link {
        background-color: white;
        color: black;
      }

      .nav-pills .pills-3 .nav-link {
        background-color: white;
        color: black;
      }
      .dot1 {
        height: 155px;
        width: 155px;
        background-image: url("circle-images/arijit-img.jfif");
        border-radius: 50%;
        display: inline-block;
        background-position: center;
      }
      .dot2 {
        height: 155px;
        width: 155px;
        background-image: url("circle-images/sanam-img.jfif");
        border-radius: 50%;
        display: inline-block;
        background-position: center;
      }
      .dot3 {
        height: 155px;
        width: 155px;
        background-image: url("circle-images/hardy-img.jfif");
        border-radius: 50%;
        display: inline-block;
      }
      .dot4 {
        height: 155px;
        width: 155px;
        background-image: url("circle-images/honey-img.jfif");
        border-radius: 50%;
        display: inline-block;
        background-position: center;
      }
      .dot5 {
        height: 155px;
        width: 155px;
        background-image: url("circle-images/badshah-img.jfif");
        border-radius: 50%;
        display: inline-block;
      }
      .dot6 {
        height: 155px;
        width: 155px;
        background-image: url("circle-images/jubin-img.jfif");
        border-radius: 50%;
        display: inline-block;
      }
    </style>

    <title></title>
    <?php
    include("config.php");
 
    if(isset($_POST['but_upload'])){
        
      $image_base64 = base64_encode(file_get_contents("../local_stg/webcam_pic.jpg"));  
      $image = 'data:image/jpeg;base64,'.$image_base64;
      $query = "insert into images(image) values('".$image."')";
      mysqli_query($con,$query) or die(mysqli_error($con));
    }
    ?>
  </head>
  <body>
    <!-- navbar -->
    <section class="mt-1">
    <ul class="nav nav-pills mb-3 border" id="pills-tab" role="tablist" >
      <li class="nav-item" role="presentation">
        <a class="navbar-brand" href="#">  
            <!-- Add logo with size of 90*80 -->
            <img src= "http://ixd.prattsi.org/wp-content/uploads/2017/01/apple_music_logo_by_mattroxzworld-d982zrj.png"
            width="70" height="50" alt=""> Mood Music
        </a>
      </li>
      <li class="nav-item pills-1" role="presentation">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="height: 50px; width: 70px;">Home</a>
      </li>
      <li class="nav-item pills-2" role="presentation">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="height: 50px; width: 70px;">Browse</a>
      </li>
      <li class="nav-item pills-3" role="presentation">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" style="height: 50px; width: 70px;">AI </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="navbar-brand" href="http://127.0.0.1:5000/">  
            Recommend
        </a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <!-- slider -->
  <h1>Trending Now</h1>
  <div class="carousel-inner">
    <div class="carousel-item active row">
      <div class="row">
        <div class="col-6 col-md-4">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\sanam.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Mere Mehbob</h1>
          <div class="card-text">
            Sanam
          </div>
        </div>
      </div>
        </div>
        <div class="col-6 col-md-4">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\arijit.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Phir Mohabat</h1>
          <div class="card-text">
            Arijit Singh
          </div>
        </div>
      </div>
        </div>
        <div class="col-md-4 d-md-block d-none">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\harddy.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Naah</h1>
          <div class="card-text">
            Harddy Sandhu
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-6 col-md-4">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\pagal.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Pagal</h1>
          <div class="card-text">
            Badshah
          </div>
        </div>
      </div>
        </div>
        <div class="col-6 col-md-4">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\tuje-kitna-chahne-lage-hum.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>tuje kitna</h1>
          <div class="card-text">
            Jubin Nautiyal
          </div>
        </div>
      </div>
        </div>
        <div class="col-md-4 d-md-block d-none">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\nazm.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Nazm Nazm</h1>
          <div class="card-text">
            Ayushman Khurana
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-6 col-md-4">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\aaj-bhi.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Aaj Bhi</h1>
          <div class="card-text">
            Vishal Mishra
          </div>
        </div>
      </div>
        </div>
        <div class="col-6 col-md-4">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <img src="images\khamoshiyan.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </div>
        <div class="card-body">
          <h1>Khamoshiyan</h1>
          <div class="card-text">
            Arijit Singh
          </div>
        </div>
      </div>
        </div>
        <div class="col-md-4 d-md-block d-none">
      <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <div style="text-align: center;">
        <a href="\music player\dark-light-musicplayer-master\index.html">
        <img src="images\ik-vari-aa.jfif" class="card-img-top" style="width: 300px; height: 300px;">
        </a>
        </div>
        <div class="card-body">
          <h1>Ik Vari aa</h1>
          <div class="card-text">
             Jubin and Shirley
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <!-- artist circles -->
      <h1 style="margin-left: 15%;">Artists</h1>
      <div class="card" style="margin-right: 12%; margin-left: 12%; border: none;">
      <div class="wpb_wrapper">
      <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <span class="dot1"></span>
        </div> 
        <div class="col-lg-4">
          <span class="dot2"></span>
        </div> 
        <div class="col-lg-4">
          <span class="dot3"></span>
        </div>         
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h4>Arijit Singh</h4>
        </div> 
        <div class="col-lg-4">
          <h4>Sanam Puri</h4>
        </div> 
        <div class="col-lg-4">
          <h4>Harddy Sandhu</h4>
        </div>         
      </div>
      <div class="row">
        <div class="col-lg-4">
          <span class="dot4"></span>
        </div> 
        <div class="col-lg-4">
          <span class="dot5"></span>
        </div> 
        <div class="col-lg-4">
          <a href="list-selena.html">
          <span class="dot6"></span>
          </a>
        </div>         
      </div>
      <div class="row">
        <div class="col-lg-4">
          <h4>Honey Singh</h4>
        </div> 
        <div class="col-lg-4">
          <h4>Badshah</h4>
        </div> 
        <div class="col-lg-4">
          <h4>Jubin Nautiyal</h4>
        </div>         
      </div>
      </div>
      </div>
      </div>
      <h1 style="margin-left: 13%;" class="mt-3">New Songs</h1>
      <div class="container mt-3">
            <div class="row">
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\arijit-img-1.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Khairyat<br><small>Arijit Singh</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\hardy-1.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Kya Baat Aay<br><small>Hardy Sandhu</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\honey-1.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Superman<br><small>Honey Singh</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\jubin-1.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Meri Aashiqui<br><small>Jubin Nautiyal</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\sanam-3.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Gulabi Aankhein<br><small>Sanam</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\badshah-4.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Helein toot gayi<br><small>Badshah, Guru randhawa</small>
                  </div>
                </div>
              </div>
          </div>
          <div class="row mt-2">
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\arijit-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Pal<br><small>Arijit Singh</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\hardy-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Backbone<br><small>Hardy Sandhu</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\honey-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Brown Rang<br><small>Honey Singh </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\jubin-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    agar tum sath ho<br><small>Jubin Nautiyal</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\sanam-4.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Humein tumse pyar kitna<br><small>Sanam</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\arijit-3.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    ae dil hai muskil<br><small>Arijit Singh</small>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <h1 style="margin-left: 13%;" class="mt-2">Top Music Charts</h1>
            <div class="container mt-3">
            <div class="row">
              <div class="col-lg-3">
                <div class="card">
                  <a href="trending-today-charts.html">
                  <img src="music-charts-images\arijit-5.jfif" width="150" height="150" class="card-img-top"></a>
                  <div class="card-body">
                    Trending Today
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\badshah-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Hip Hop
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\hardy-3.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    TOP 40
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\honey-3.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Honey Singh Hits
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\hardy-4.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Fresh Songs
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\honey-4.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Rap Songs
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\jubin-3.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Sad Songs
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card">
                  <img src="music-charts-images\sanam-1.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Remix Songs
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h1 style="margin-left: 13%;" class="mt-2">Top Playlists</h1>
              <div class="container mt-3">
                    <div class="row">
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="English music Playlist\arijit-4.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Arijit Playlist
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="English music Playlist\arijit-6.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Mood Refreshments
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="English music Playlist\badshah-1.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Punjabi Hits
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="English music Playlist\badshah-3.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Female Artists
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="English music Playlist\sanam-2.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Classic Remixs
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\sanam.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Sanam Hits
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row mt-2">
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\arijit.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Workout Playlists 
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\khamoshiyan.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Love Songs 
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\ik-vari-aa.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Mix Tapes
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\nazm.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Work Light Songs
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\pagal.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Rock Songs
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card">
                          <img src="images\harddy.jfif" width="150" height="150" class="card-img-top">
                          <div class="card-body">
                            Viral Hits
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div style="margin-left: 15%; margin-right: 10%;">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">New Releases</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Charts</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Top Playlists</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h1 class="mt-2">New Songs</h1>
            <div class="container mt-3">
              <div class="row">
                <div class="col-lg-2">
                  <div class="card">
                    <img src="newsongs-img\arijit-img-1.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Khairyat<br><small>Arijit Singh</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="newsongs-img\hardy-1.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Kya Baat Aay<br><small>Hardy Sandhu</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="newsongs-img\honey-1.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Superman<br><small>Honey Singh</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="newsongs-img\jubin-1.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Meri Aashiqui<br><small>Jubin Nautiyal</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="newsongs-img\sanam-3.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Gulabi Aankhein<br><small>Sanam</small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="newsongs-img\badshah-4.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Helein toot gayi<br><small>Badshah, Guru randhawa</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\arijit-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Pal<br><small>Arijit Singh</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\hardy-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Backbone<br><small>Hardy Sandhu</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\honey-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Brown Rang<br><small>Honey Singh </small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\jubin-2.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    agar tum sath ho<br><small>Jubin Nautiyal</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\sanam-4.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    Humein tumse pyar kitna<br><small>Sanam</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="card">
                  <img src="newsongs-img\arijit-3.jfif" width="150" height="150" class="card-img-top">
                  <div class="card-body">
                    ae dil hai muskil<br><small>Arijit Singh</small>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h1 class="mt-2">Top Music Charts</h1>
            <div class="container mt-3">
              <div class="row">
                <div class="col-lg-3">
                  <div class="card">
                    <a href="trending-today-charts.html">
                    <img src="music-charts-images\arijit-5.jfif" width="150" height="150" class="card-img-top"></a>
                    <div class="card-body">
                      Trending Today
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\badshah-2.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Hip Hop
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\hardy-3.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      TOP 40
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\honey-3.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Honey Singh Hits
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\hardy-4.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Fresh Songs
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\honey-4.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Rap Songs
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\jubin-3.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Sad Songs
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="card">
                    <img src="music-charts-images\sanam-1.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Remix Songs
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <h1 class="mt-3">Top Playlists</h1>
            <div class="container mt-3">
              <div class="row">
                <div class="col-lg-2">
                  <div class="card">
                    <img src="English music Playlist\arijit-4.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Arijit Playlist
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="English music Playlist\arijit-6.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Mood Refreshments
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="English music Playlist\badshah-1.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Punjabi Hits
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="English music Playlist\badshah-3.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Female Artists
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="English music Playlist\sanam-2.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Classic Remixs
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\sanam.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Sanam Hits
                    </div>
                  </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\arijit.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Workout Playlists 
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\khamoshiyan.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Love Songs 
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\ik-vari-aa.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Mix Tapes
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\nazm.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Work Light Songs
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\pagal.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Rock Songs
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="card">
                    <img src="images\harddy.jfif" width="150" height="150" class="card-img-top">
                    <div class="card-body">
                      Viral Hits
                    </div>
                  </div>
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div id="camera" style="height:auto;width:auto; text-align:left;"></div>
        <form method="post" action="" enctype='multipart/form-data'>
          <input type="button" value="Take a Snap and Download Picture" id="btPic" 
            onclick="takeSnapShot()"/> 
            <button name='but_upload'>Save</button><p style="color: red"> This save button will save your pictures in database and it will improve our system.</p>
        </form>
      </div>
    </div>
    </section>
    <!-- footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        // CAMERA SETTINGS.
        Webcam.set({
            width: 600,
            height: 400,
            image_format: 'jpeg',
            jpeg_quality: 100
        });
        Webcam.attach('#camera');

        // TAKE A SNAPSHOT.
        takeSnapShot = function () {
            Webcam.snap(function (data_uri) {
                downloadImage('webcam_pic', data_uri);
            });
        }

        // DOWNLOAD THE IMAGE.
        downloadImage = function (name, datauri) {
            var a = document.createElement('a');
            a.setAttribute('download', name + '.jpg');
            a.setAttribute('href', datauri);
            a.click();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>