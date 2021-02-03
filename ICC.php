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
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/ICC.webp">
      Committees - Internal Complaints Committee
    </h2>
    <div class="jumbotron mt-4  mx-auto" id="SPBG" data-aos="fade-up">
      <table class="table table-bordered" id="background" data-aos="fade">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Dr. Neha Sharma </td>
            <td>Convenor and Presiding Officer (neha.sharma@keshav.du.ac.in)</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Dr. Richa Sharma </td>
            <td>Teacher Representative</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Dr. Shalini Devi </td>
            <td>Teacher Representative</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Mr. Raj Kumar</td>
            <td>Non-Teaching Member</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Ms. Saroj </td>
            <td>Non-Teaching Member</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Mr. Mohit Jain </td>
            <td>Student</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Ms. Shreya Bhatnagar </td>
            <td>Student</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Ms. Monika </td>
            <td>Student</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Mr. Ankur Jain </td>
            <td>Advocate</td>
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