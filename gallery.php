<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
			background-image: url("wallpaperproduk.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
.logo {
  text-align: center;
  margin-top: 0 5px;
}

.logo img {
  width: 300px;
  height: 50px;
}
h1 {
  margin: 10;
  font-size: 50px;
}
ul li{
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: #053e28;
    padding:3px 15px;
    border: 1px solid;
    transition: 0.6s;
    margin: 8px;
}
ul li a:hover{
    border-radius: 89px;
    background: linear-gradient(145deg, #a7cdb0, #c6f4d2);
    box-shadow:  19px 19px 56px #85a48d,
                 -19px -19px 56px #edfffb;
}
.carousel-item img {
  display: block;
  margin: 0 auto;
  max-width: 600px;
  max-height: 400px;
  width: auto;
  height: auto;
}
</style>
</head> 
<body>
    <body bgcolor="mintcream">
        <div class="logo">
            <img src="semuakucing.png" alt="Logo">
          </div>
        <h1 class="title"><font face="BLACK" color= #053e28 ><center>Gallery My Cat</center></font></h1>
        <hr width=100% size=3 color= #053e28 align=left>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ul>
          
          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="gambar1.png" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="gambar2.jpeg"Slide 2">
            </div>
            <div class="carousel-item">
              <img src="gambar3.jpg" alt="Slide 3">
            </div>
          </div>
          
          <!-- Controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        

        <script>
          $(document).ready(function(){
            $('.carousel').carousel({
              interval: 1000, // Interval waktu perpindahan slide (dalam milidetik)
              pause: "hover" // Memberhentikan perpindahan slide ketika kursor berada di atas slider
            });
          });
        </script>

        <br><center><video autoplay muted>
          <source src="gambar4.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>

        <br><audio src="gambar6.mp3" controls>
          Your browser does not support the audio element.
        </audio>
        
    </body>
</html>
