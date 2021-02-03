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
      <img class="img-fluid mr-1 mb-1 rounded-circle" id="cardicon1" src="IMG/TIC.webp">
     List of Teacher Incharge and Co-ordinators
    </h2>
    <div class="jumbotron mt-lg-2 mx-auto" id="SPBG" data-aos="fade-up">
      <table class="table table-bordered" id="background">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Name of the Department(s)</th>
            <th scope="col">Teacher-in-Charge</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Chemistry</td>
            <td>Dr. Mukesh</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Commerce</td>
            <td>Mr. Praveen Kumar</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Computer Science</td>
            <td>Dr. Anjali Thukral</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Electronics</td>
            <td>Dr. Jagneet Kaur Anand</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>English</td>
            <td>Dr. Manjari Singh</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Mathematics</td>
            <td>Dr. Rubina Mittal</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Management Studies</td>
            <td>Dr. Amanjot Sachdeva</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Physics</td>
            <td>Dr. Jasmeet Singh</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Psychology</td>
            <td>Dr. Harpreet Bhatia</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Physical Education</td>
            <td>Dr. Surender Singh</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered" id="background">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Course / Subject(s) </th>
            <th scope="col">Coordinator</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td class="w-50">B.Sc.(Prog.) Physical Science with Computer Science</td>
            <td>Dr. Arpana Sharma</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Environment Science</td>
            <td>Dr. Arpana Sharma</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Hindi</td>
            <td>Dr. Arpana Sharma</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Radio Broadcasting</td>
            <td>Dr. Anjali Thukral</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>French and German Diploma/Certificate</td>
            <td>Dr. Vinita Jindal</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>NCWEB</td>
            <td>Dr. Deepak Srivastava</td>
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