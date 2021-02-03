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
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/SEATS.webp">
    Distribution of ECA Seats 2020-2021
    </h2>
    <div class="jumbotron mt-4  mx-auto" id="SPBG" data-aos="fade-up">
      <table class="table table-bordered" id="background" data-aos="fade">
        <thead>
          <tr>
            <th scope="col">Category</th>
            <th scope="col">Sub-Category</th>
            <th scope="col">Number of Seats</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dance</td>
            <td>Indian Classical</td>
            <td>02</td>
          </tr>
          <tr>
            <td>Dance</td>
            <td>Choreography</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Debate</td>
            <td>Debate (Hindi)</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Debate</td>
            <td>Debate (English)</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Digital Media</td>
            <td>Animation</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Music (Vocal: Indian)</td>
            <td>Indian (Classical and Light)</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Music (Instrumental: Indian)</td>
            <td>Harmonium</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Theatre</td>
            <td>Theatre</td>
            <td>01</td>
          </tr>
          <tr>
            <td>NSS</td>
            <td>NSS</td>
            <td>01</td>
          </tr>
          <tr>
            <td>Yoga</td>
            <td>Yoga</td>
            <td>02</td>
          </tr>
          <tr>
            <td><b>TOTAL ECA QUOTA  SEATS</b></td>
            <td></td>
            <td><b>Number of Seats=12</b></td>
          </tr>
        </tbody>
      </table>
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