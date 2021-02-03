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
    <div class="jumbotron mt-lg-2 mx-auto" id="SPBG" data-aos="fade">
      <h5 class="text-white mb-3" id="titleup" data-aos="fade-right">
      <img class="img-fluid mr-1 mb-1 " id="cardicon1" src="IMG/EXECUTIVE.webp">
    Executive Team</h5>
      <table class="table table-bordered" data-aos="fade-up">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Prof. Madhu Pruthi</td>
            <td>Principal</td>
          </tr>
          <tr>
            <td>Dr. Vijay Kumar Verma</td>
            <td>Vice Principal</td>
          </tr>
          <tr>
            <td>Dr. (Ms.) Kanupriya Goswami</td>
            <td>Bursar</td>
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