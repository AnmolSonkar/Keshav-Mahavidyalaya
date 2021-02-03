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
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/FEE.webp">
      Consolidated Course Fee Structure 2020-2021(All charges are in Indian Rupees(INR))
    </h2>
    <div class="jumbotron mt-4  mx-auto" id="SPBG" data-aos="fade-up">
      <table class="table table-bordered" id="background" data-aos="fade">
        <thead>
          <tr>
            <th scope="col">Name of the Course</th>
            <th scope="col">Gen/OBC
              <br>EWS/Min</th>
            <th scope="col">PwD</th>
            <th scope="col">SC/ST</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>B.Com (Hons.)</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
          <tr>
            <td>B.Sc.(Hons.) Computer Science</td>
            <td>24156</td>
            <td>280</td>
            <td>23976</td>
          </tr>
          <tr>
            <td>B.Sc.(Hons.) Electronics</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
          <tr>
            <td>B.Sc.(Hons.) Mathematics</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
          <tr>
            <td>B.Sc. (Prog.) Mathematical Science</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
          <tr>
            <td>Bachelor of Management Studies</td>
            <td>14836</td>
            <td>280</td>
            <td>14656</td>
          </tr>
          <tr>
            <td>B.Sc.(Hons.) Physics</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
          <tr>
            <td>B.Sc. (Prog.) Physical Science with Computer Science</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
          <tr>
            <td>B.A. (Hons.) Psychology</td>
            <td>9336</td>
            <td>280</td>
            <td>9156</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered" id="background">
        <thead>
          <tr>
            <th scope="col">Name of the Course</th>
            <th scope="col">Annual Fee in Rupees</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Short term Add-on course on Radio Broadcasting</td>
            <td>7000</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered" id="background">
        <thead>
          <tr>
            <th scope="col">Name of the Course</th>
            <th scope="col">Annual Fee in Rupees (Excluding Examination Fee)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Certificate Courses in French/ German Language</td>
            <td>For College Students-5500, For Outside Students-8500</td>
          </tr>
          <tr>
            <td>Diploma Courses in French/ German Language</td>
            <td>10000</td>
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