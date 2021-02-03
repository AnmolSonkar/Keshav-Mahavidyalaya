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
      <img class="img-fluid mr-1 mb-1 rounded-circle" id="cardicon1" src="IMG/ACCOUNTSECTION.webp">
      Accounts Section
    </h2>
    <div class="jumbotron mt-lg-2 mx-auto" id="SPBG"  data-aos="fade-up">
      <h5 class="text-white" id="titleup" data-aos="fade">Permanent</h5>
      <table class="table table-bordered" data-aos="fade">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ms. Nidhi Sikri</td>
            <td>Assistant</td>
          </tr>
          <tr>
            <td>Mr. An Singh Mehra</td>
            <td>Junior Assistant</td>
          </tr>
          <tr>
            <td>Mr. R.D. Kaushik</td>
            <td>Gest. Operator</td>
          </tr>
          <tr>
            <td>Mr. Ram Kumar</td>
            <td>Daftari</td>
          </tr>
          <tr>
            <td>Mr. Vinod Kumar</td>
            <td>Office Attendant</td>
          </tr>
        </tbody>
      </table>
      <h5 class="text-white" id="titleup" data-aos="fade">Contractual</h5>
      <table class="table table-bordered" data-aos="fade">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mr. P.K. Bhatia</td>
            <td>S.O. Accounts</td>
          </tr>
          <tr>
            <td>Mr. Suraj Kumar</td>
            <td>Junior Assistant</td>
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