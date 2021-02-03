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
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/FEEDBACK.webp">
   Feedback Forms
    </h2>
    <div class="jumbotron mt-4  mx-auto" id="SPBG" data-aos="fade-up">
      <div class="container text-white" id="list" data-aos="fade">
        <ul class="list-group ">
          <li class="list-group-item m-1"> <i class="fa fa-comments-o text-white mr-2 "></i><a href="https://docs.google.com/forms/u/1/d/1vwKb-8z5yShPYLkzC4NYU6iPF6YPWxn6lW8VFUfUCLI/viewform?usp=drive_web&edit_requested=true">Students Feedback Form
          </a> </li>
          <li class="list-group-item m-1"> <i class="fa fa-comments-o text-white mr-2 "></i><a href="https://docs.google.com/forms/d/1tEDUNFjJsorDAiSExOyhmqEKlrtFsnmQHnGJIugt-dE/viewform?edit_requested=true">Girls Hostel Feedback Form
          </a> </li>
          <li class="list-group-item m-1"> <i class="fa fa-comments-o text-white mr-2 "></i><a href="https://docs.google.com/forms/d/1IwdQY3WR15RwLylrt_6_mWUvUHbKHWRMnDuDOlP_i1I/viewform?edit_requested=true">Parent Feedback Form
          </a> </li>
          <li class="list-group-item m-1"> <i class="fa fa-comments-o text-white mr-2 "></i><a href="http://app.du.ac.in/sgr/Index/form/create">Grievance Redressal
          </a> </li>
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