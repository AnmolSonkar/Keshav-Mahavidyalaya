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
  <div class="mx-auto" id="boxwidth">
    <h2 class="mt-lg-5" id="HeadTitle" data-aos="fade-right">
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/VISION&MISSION.webp">
      Vision and Mission  
    </h2>
    <div class="jumbotron mt-4 mx-auto" id="SPBG" data-aos="fade">
      <h5 class="text-white mb-3" id="titleup" data-aos="fade-right">
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/VISION.webp">
      Vision</h5>
      <p class="ml-lg-4 text-white" id="textp" data-aos="fade-right"> To be a premier institute that nurtures creativity amongst students and instills moral values along with quality education to enable them to take on real life challenges with confidence. </p>
    </div>
    <div class="jumbotron mt-2 mx-auto" id="SPBG" data-aos="fade">
      <h5 class="text-white mb-3" id="titleup" data-aos="fade-right">
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/MISSION.webp">
     Mission</h5>
      <div class="container text-white" id="list" data-aos="fade-right">
        <ul>
          <li>To inculcate positivity in attitude and thought.</li>
          <li>To nurture creativity and problem solving skills.</li>
          <li>To sensitize students towards gender issues and respect for all human beings.</li>
          <li>To bring about awareness related to ecological enrichment and environmental factors.</li>
          <li>To encourage students to have the vision and courage to initiate and manage change.</li>
          <li>To help in recognizing the challenges of a competitive world and learn to adapt.</li>
          <li>To create a clean and conducive atmosphere for the promotion of education.</li>
          <li>To give impetus to women empowerment.</li>
        </ul>
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