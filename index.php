<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<script src="https://kit.fontawesome.com/659872707b.js" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>


</head>

<body style="background-color: #2c3338; margin:none; padding:none; ">
  <!-- menu -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown">
              Dropdown
            </a>
            <div class="dropdown-content">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
          <input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
          <input type="submit" name="search" value="Search" />
        </form>
        <a href="login.php" style="padding-left: 30px;"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
        <a href="register.php" style="padding-left: 30px;"><i class="fa-solid fa-user-plus"></i></a>
      </div>
    </div>
  </nav>
  <!-- end menu -->
  <!-- slide -->
  <div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height: 850px;">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://pbs.twimg.com/media/EDUETe0UEAADcdH?format=jpg&name=4096x4096" alt="First slide">
      </div>
      <div class="carousel-item" style="height: 720px;">
        <img class="d-block w-100" src="https://www.gillettestadium.com/wp-content/uploads/2022/03/RG_GilletteStadium_0721_TheWeeknd_VA_1170x544_GTT.jpg" alt="Second slide">
      </div>
      <div class="carousel-item" style="height:720px;">
        <img class="d-block w-100" src="https://cdn-az.allevents.in/events2/banners/8ec7109b72b644a106b90c42dfed5cd7921fb8448605701c6324eb60f0f73e09-rimg-w960-h502-gmir.jpg?v=1647918876" alt="Third slide">
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
  <!-- end slide -->
  <!-- list product -->
  <div class="container">
    <div class="row mt-5">
      <h2 class="list-product-title" style="color: white;">Latest Released!</h2>
      <div class="list-product-subtitle">
        <p style="color: white;">List product description</p>
      </div>
      <div class="product-group">
        <div class="row">

          <?php
          // $connect = mysqli_connect('127.0.0.1', 'root', '', 'tune_source');
          $connect = mysqli_connect('3.132.234.157', 'Hoa', '123@123a', 'tune_source');
          if (!$connect) {
            echo "Connection failed";
          }
          $sql = "SELECT * FROM song";
          $song_image_path = "assets\img\song_img";
          $song_audio_path = "assets\Audio\\";
          $result = mysqli_query($connect, $sql);

          while ($row = mysqli_fetch_array($result)) {

            // $song_id = $row_song['song_id'];
            // $song_name = $row_song['song_name'];
            // $song_price = $row_song['song_price'];
            // $song_audio = $row_song['song_audio'];
            // $song_image = $row_song['song_image'];
          ?>
            <div class="col-md-3 col-sm-6 col-12">
              <div class="card card-product mb-3">
                <img class="card-img-top" src=<?php echo "'" . $song_image_path . "\\" .  $row['song_img'] . "'" ?> alt="Card image cap">
                <div class="card-body" style="background-color: #d8d8d8; color: black; border-color:#d8d8d8;">
                  <h5 class="card-title" style="height: 50px;"><?php echo $row['song_name'] ?></h5>
                  <p class="card-text">
                    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                      <source src="<?php echo  $song_audio_path . $row['song_audio'] ?>" type="audio/mpeg">
                    </audio>


                    <script type="text/javascript">
                      function myAudio(event) {
                        if (event.currentTime > 10) {
                          event.currentTime = 0;
                          event.pause();
                          alert("Bạn phải trả phí để nghe cả bài")
                        }
                      }

                      function onlyPlayOneIn(container) {
                        container.addEventListener("play", function(event) {
                          audio_elements = container.getElementsByTagName("audio")
                          for (i = 0; i < audio_elements.length; i++) {
                            audio_element = audio_elements[i];
                            if (audio_element !== event.target) {
                              audio_element.pause();
                            }
                          }
                        }, true);
                      }
                      document.addEventListener("DOMContentLoaded", function() {
                        onlyPlayOneIn(document.body);
                      });
                    </script>
                  </p>

                  <a href="details.php?<?php echo "id=" . $row['song_id'] ?>" class="btn btn-primary" style="background-color: #242020; border-color: #242020;">Details</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
          <!-- <div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/b/b5/Strawberries_%26_Cigarettes_by_Troye_Sivan.png" alt="Card image cap">
					  <div class="card-body" style="background-color: #d8d8d8; color: black; border-color:#d8d8d8;">
					    <h5 class="card-title">Strawberries & Cigarettes</h5>
					    <p class="card-text"><audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                            <source src="Audio/" type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>60){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                                function onlyPlayOneIn(container) {
																	  container.addEventListener("play", function(event) {
																	  audio_elements = container.getElementsByTagName("audio")
																	    for(i=0; i < audio_elements.length; i++) {
																	      audio_element = audio_elements[i];
																	      if (audio_element !== event.target) {
																	        audio_element.pause();
																	      }
																	    }
																	  }, true);
																	}
																	document.addEventListener("DOMContentLoaded", function() {
																	  onlyPlayOneIn(document.body);
																	});
                            </script></p>
					    <a href="#" class="btn btn-primary" style="background-color: #242020; border-color: #242020;">Go somewhere</a>
					  </div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://i.scdn.co/image/ab67616d0000b2730743f2ffd748b7b22a64f4a4" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Champion</h5>
					    <p class="card-text"><audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                            <source src="Audio/Champion.mp3" type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>60){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://i1.sndcdn.com/artworks-000490987320-u1f2pg-t500x500.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Mirage</h5>
					    <p class="card-text"><audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                            <source src="Audio/Elina - Mirage (Official Video).mp3" type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function myAudio(event){
                                    if(event.currentTime>60){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                                function onlyPlayOneIn(container) {
																	  container.addEventListener("play", function(event) {
																	  audio_elements = container.getElementsByTagName("audio")
																	    for(i=0; i < audio_elements.length; i++) {
																	      audio_element = audio_elements[i];
																	      if (audio_element !== event.target) {
																	        audio_element.pause();
																	      }
																	    }
																	  }, true);
																	}
																	document.addEventListener("DOMContentLoaded", function() {
																	  onlyPlayOneIn(document.body);
																	});
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>	
							
				 -->





        </div>
      </div>
    </div>
  </div>


  <!-- end list product -->
  
  <?php include 'footer.php' ?>;

  <!-- Load jquery trước khi load bootstrap js -->
  <script src="jquery-3.3.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>