<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
  background-image: url('walgaleri.jpeg');
  background-size: cover;
  background-repeat: no-repeat;
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
        <nav>
            <center><ul>
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="https://shopee.co.id/search?keyword=catshop">Shop</a></li>
              <li><a href="produkdinamis.php">Produk</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScuT1mibxeJr72FFsLIyQOQ-CR1UnkGCOtY7j4DfRW5IqNWuA/viewform?usp=sf_link">FAQ</a></li>
              <li><a href="bardonasi.jpg">Donasi</a></li>
            </ul></center>
          </nav>
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
              <img src="9cats.png" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="baul.jpeg" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="baull.jpg" alt="Slide 3">
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
              interval: 2000, // Interval waktu perpindahan slide (dalam milidetik)
              pause: "hover" // Memberhentikan perpindahan slide ketika kursor berada di atas slider
            });
          });
        </script>

        <center><video autoplay muted width="400" height="300">
        <source src="perusahaan.mp4" type="video/mp4"></center>
        </video>


        <center><br><audio src="carly.mp3" controls></center>
          Your browser does not support the audio element.
        </audio>
        
    </body>
</html>
