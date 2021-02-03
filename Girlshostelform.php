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
      <img class="img-fluid mr-1 mb-1 rounded-circle" id="cardicon1" src="IMG/SFORM.webp">
     Girls Hostel Form
    </h2>
    <div class="jumbotron mt-4  mx-auto" id="SPBG" data-aos="fade-up">
      <div class="container text-white" id="list" data-aos="fade">
        <ul class="list-group ">
          <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/forms/Hostel/Hostel_Accommodation_Form.pdf">Hostel Accommodation Form</a> </li>
        </ul>
        <ul class="list-group ">
          <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/forms/Hostel/Hostel_Admission_Form.pdf">Hostel Admission Form</a> </li>
        </ul>
        <ul class="list-group ">
          <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/forms/Hostel/Hostel_Identity_Card.pdf">Hostel Identity Card</a> </li>
        </ul>
        <ul class="list-group ">
          <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/forms/Hostel/Medical_Fitness_Certificate.pdf">Medical Fitness Certificate</a> </li>
        </ul>
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