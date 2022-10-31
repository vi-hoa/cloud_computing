<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


</head>
<body>
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
          
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
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
  <div class="carousel-inner" style="height: 720px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://pbs.twimg.com/media/EDUETe0UEAADcdH?format=jpg&name=4096x4096" alt="First slide"  >
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
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group" >
			<div class="row">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/b/b5/Strawberries_%26_Cigarettes_by_Troye_Sivan.png" alt="Card image cap">
					  <div class="card-body">
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://i1.sndcdn.com/artworks-000171207881-p4vo79-t500x500.jpg">
					  <div class="card-body">
					    <h5 class="card-title">Somebody Else</h5>
					    <p class="card-text"> <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
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
								<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://static.wikia.nocookie.net/halsey/images/6/67/Badlands_Album_Cover.png/revision/latest?cb=20191208172725" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Control</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://avatar-ex-swe.nixcdn.com/song/2018/05/18/0/6/7/d/1526629910796_640.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Bad At Love</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/3/3d/Partyfavorvinylsinglecover.webp" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">party favor</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://i1.sndcdn.com/artworks-000079888240-lppiob-t500x500.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Trong veo</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://images.genius.com/7907ab9cc2c2f2fb154eb1c195cd144d.1000x1000x1.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">i miss you, i'm sorry</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
					<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://images.genius.com/f84994dda55b991ab4a3654e452218c8.1000x1000x1.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">That's so us</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/7/71/Ed_Sheeran_-_Afterglow.png" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Afterglow</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://avatar-ex-swe.nixcdn.com/song/2020/09/25/1/2/7/5/1601044524040_640.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Show & Tell</h5>
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
                            </script></p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>											
			</div>
		</div>
	</div>
</div>


<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>