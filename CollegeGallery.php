<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Keshav Mahavidyalaya</title>
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  <link rel="stylesheet" type="text/css" href="CSS/Photos.css">
  <link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="CSS/Gallery.css">
  <link rel="stylesheet" type="text/css" href="CSS/Aos.css"> </head>

<body>
  <div id="MobileTop">
    <?php include("Navbar2.php"); ?>
  </div>
  <div class="d-lg-none">
    <?php include("Socialbar2.php")?>
  </div>
  <div id="Sidebar">
    <?php include("Sidebar.php"); ?>
  </div>
  <div class="mx-auto " id="boxwidth">
    <div class="tz-gallery">
      <h2 class="mt-lg-5" id="HeadTitle" data-aos="fade-right">
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/GALLERY.webp">
      Gallery
    </h2>
      <div class="dropdown">
        <button class="btn mt-lg-5 mt-2 mr-lg-5 mr-3 dropdown-toggle float-right MenuButton" data-aos="fade" type="button" id="sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-aos="zoom-in" data-aos-delay="400"> <i class="fa fa-calendar  mr-2" aria-hidden="true" id="actionbtn"></i> Events </button>
        <div class="dropdown-menu mr-5" aria-labelledby="sort"> <a class="dropdown-item filter-button mr-2" href="#" id="Gactive" data-filter="All">All</a> <a class="dropdown-item filter-button mr-2" href="#" id="Gactive" data-filter="INDEPENDENCEDAY">
        Independence Day
      </a> <a class="dropdown-item filter-button mr-2" href="#" id="Gactive" data-filter="REPUBLICDAY">
        Republic Day
      </a> </div>
      </div>
      <div class="jumbotron mt-lg-4 mx-auto" id="SPBG" data-aos="fade">
        <h5 id="Year" data-aos="fade-right">2020-2021</h5>
        <div class="row mt-lg-4" data-aos="zoom-in">
          <div class="col-sm-6 col-md-4 filter All INDEPENDENCEDAY" id="Album">
            <a class=" lightbox pics animation border-0" href="IMG/INDEPENDENCEDAY.webp"> <img src="IMG/INDEPENDENCEDAY.webp" alt="1"> </a>
          </div>
          <div class="col-sm-6 col-md-4 filter All INDEPENDENCEDAY" id="Album">
            <a class="lightbox pics animation border-0 border-0" href="IMG/INDEPENDENCEDAY.webp"> <img src="IMG/INDEPENDENCEDAY.webp" alt="2"> </a>
          </div>
          <div class="col-sm-6 col-md-4  filter All REPUBLICDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/REPUBLICDAY.webp"> <img src="IMG/REPUBLICDAY.webp" alt="7"> </a>
          </div>
          <div class="col-sm-12 col-md-4 filter All INDEPENDENCEDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/INDEPENDENCEDAY.webp"> <img src="IMG/INDEPENDENCEDAY.webp" alt="3"> </a>
          </div>
          <div class="col-sm-6 col-md-4  filter All REPUBLICDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/REPUBLICDAY.webp"> <img src="IMG/REPUBLICDAY.webp" alt="8"> </a>
          </div>
          <div class="col-sm-6 col-md-4  filter All REPUBLICDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/REPUBLICDAY.webp"> <img src="IMG/REPUBLICDAY.webp" alt="9"> </a>
          </div>
        </div>
        <h5 id="Year" data-aos="fade-right">2019-2020</h5>
        <div class="row mt-lg-4" data-aos="zoom-in">
          <div class="col-sm-6 col-md-4   filter All REPUBLICDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/REPUBLICDAY.webp"> <img src="IMG/REPUBLICDAY.webp" alt="7"> </a>
          </div>
          <div class="col-sm-6 col-md-4   filter All REPUBLICDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/REPUBLICDAY.webp"> <img src="IMG/REPUBLICDAY.webp" alt="8"> </a>
          </div>
          <div class="col-sm-6 col-md-4  filter All REPUBLICDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/REPUBLICDAY.webp"> <img src="IMG/REPUBLICDAY.webp" alt="9"> </a>
          </div>
          <div class="col-sm-6 col-md-4  filter All INDEPENDENCEDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/INDEPENDENCEDAY.webp"> <img src="IMG/INDEPENDENCEDAY.webp" alt="1"> </a>
          </div>
          <div class="col-sm-6 col-md-4 filter All INDEPENDENCEDAY" id="Album">
            <a class="lightbox pics animation border-0" href="IMG/INDEPENDENCEDAY.webp"> <img src="IMG/INDEPENDENCEDAY.webp" alt="2"> </a>
          </div>
          <div class="col-sm-12 col-md-4 filter All INDEPENDENCEDAY" id="Album">
            <a class="lightbox pics  animation border-0" href="IMG/INDEPENDENCEDAY.webp"> <img src="IMG/INDEPENDENCEDAY.webp" alt="3"> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="JS/Gallery.js"></script>
  <script>
  baguetteBox.run('.tz-gallery');
  </script>
  <div>
    <?php include("Footer2.php"); ?>
  </div>
</body>

</html>
<script type="text/javascript">
//AOS Animation
AOS.init({
  offset: 90,
  duration: 600,
  delay: 0,
});
</script>
<script type="text/javascript">
$(document).ready(function() {
  $(".filter-button").click(function() {
    var value = $(this).attr('data-filter');
    if(value == "all") {
      $('.filter').show('1000');
    } else {
      $(".filter").not('.' + value).hide('3000');
      $('.filter').filter('.' + value).show('3000');
    }
  });
  if($(".filter-button").removeClass("active")) {
    $(this).removeClass("active");
  }
  $(this).addClass("active");
});
</script>