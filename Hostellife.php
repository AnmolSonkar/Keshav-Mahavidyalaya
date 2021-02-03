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
  <link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="CSS/Aos.css">
  <link rel="stylesheet" type="text/css" href="CSS/Photos.css">
  <link rel="stylesheet" type="text/css" href="CSS/Gallery.css"> </head>

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
  <div class="mx-auto" id="boxwidth">
    <h2 class="mt-lg-5" id="HeadTitle" data-aos="fade-right">
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/HEART.webp">
      Hostel Life 
    </h2>
    <div class="jumbotron mt-4  mx-auto" id="SPBG" data-aos="fade">
      <p id="textp" class="text-white" data-aos="fade-right"> Hostel Life exposes each resident student to the culture of the home town that each resident brings with her and enhances the quality of life by making the residents appreciate the diversity of food, festivals, dress, customs and traditions observed in different parts of the country and abroad. Nothing can sensitize the minds better than the stories shared between residents and the exchange of their first-hand information. It makes them more resilient, cooperative and compassionate. The peace and warmth of Unity in Diversity is felt deeply in every occasion that they come together to celebrate. Right from their freshers’ welcome event to their farewell, the journey of living each moment, each festival and each event becomes an integral part of the hostel life that stays with residents forever giving them strength and courage to face life independently with great confidence. </p>
      <div class="tz-gallery">
        <div class="w-50 mx-auto" data-aos="zoom-in" data-aos-delay="150">
          <a class="lightbox" href="IMG/HOSTELLIFE.webp"> <img src="IMG/HOSTELLIFE.webp" alt="1"> </a>
        </div>
      </div>
    </div>
  </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<div>
  <?php include("Footer2.php"); ?>
</div>
<script type="text/javascript" src="JS/Gallery.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
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