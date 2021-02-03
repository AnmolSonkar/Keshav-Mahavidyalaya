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
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/ATTENDANCE.webp">
      Student Attendance
    </h2>
    <div class="card-body p-2 m-lg-5 rounded" id="background" data-aos="fade">
      <div class="col-12">
        <div class="alert alert-danger m-3" id="captcha_error" style="display:none;" role="alert"> Captcha Verification Failed </div>
      </div>
      <div class="row m-5">
        <div class="col-6" data-aos="zoom-in">
          <button id="btn_monthwise" class="btn btn-outline-info btn-block" data-toggle="collapse" data-target="#monthwise"> <img class="img-fluid m-2" id="company" src="IMG/MONTH.webp">
            <br> <a class="mt-2 text-white text-decoration-none" id="font2">Monthwise</a> </button>
        </div>
        <div class="col-6" data-aos="zoom-in">
          <button id="btn_consolidated" class="btn btn-outline-info btn-block" data-toggle="collapse" data-target="#consolidated"> <img class="img-fluid m-2" id="company" src="IMG/PIE.webp">
            <br> <a class="mt-2 text-white text-decoration-none" id="font2">Consolidated</a> </button>
        </div>
      </div>
      <div class="container-fluid collapse mt-5 text-center" id="monthwise">
        <div class="container-fluid row justify-content-center m-0">
          <div class="col-12">
            <div class="alert alert-danger m-3" id="M" style="display:none;" role="alert"> Invalid Roll Number(Enter 4 digit roll number) </div>
          </div>
          <div class="col-md-3 col-sm-12 pb-2">
            <input class="form-control" type="tel" id="roll_noM" placeholder="Roll No" /> </div>
          <div class="col-md-3 col-sm-12 pb-2">
            <select class=" custom-select " id="monthM">
              <option disabled selected>Month</option>
              <option value="jan">January</option>
              <option class="month " value="feb">February</option>
              <option class="month " value="mar">March</option>
              <option class="month " value="apr">April</option>
              <option class="month " value="may">May</option>
            </select>
          </div>
          <div class="col-md-3 col-sm-12 pb-2">
            <select class=" custom-select " id="subjectDropdownMonthwise">
              <option disabled selected>Subject</option>
            </select>
          </div>
          <div class="col-md-3 col-sm-12 pb-2 text-left">
            <button class="btn btn-outline-info btn-block" type="submit" id="submitM">Submit</button>
          </div>
        </div>
        <div class="container-fluid mt-3 mb-3" id="stu_infoM"> </div>
        <div class="container-fluid table-responsive" id="attendance_table">
          <table class="table table-bordered border-dark white">
            <thead class="thead-dark" id="attendance_data_headM"> </thead>
            <tbody id="attendance_dataM"> </tbody>
          </table>
        </div>
      </div>
      <div class="container-fluid collapse mt-5 text-center" id="consolidated">
        <div class="container-fluid row justify-content-center m-0">
          <div class="col-12">
            <div class="alert alert-danger m-3" id="C" style="display:none;" role="alert"> Invalid Roll Number(Enter 4 digit roll number) </div>
          </div>
          <div class="col-sm-12 col-md-3 pb-2">
            <input class="form-control" type="tel" id="roll_noC" placeholder="Roll no" /> </div>
          <div class="col-sm-12 col-md-3 pb-2">
            <button class="btn btn-outline-info btn-block  " type="submit" id="submitC">Submit</button>
          </div>
        </div>
        <div class="container-fluid mt-3 mb-3" id="stu_infoC"> </div>
        <div class="container-fluid table-responsive p-0 ">
          <table id="data_table_consolidated" class="table table-bordered border-dark white">
            <thead class="thead-dark" id="attendance_data_headC"> </thead>
            <tbody id="attendance_dataC"> </tbody>
          </table>
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

</html>
<script type="text/javascript" src="JS/Attendance.js"></script>
<script type="text/javascript">
//AOS Animation
AOS.init({
  offset: 90,
  duration: 600,
  delay: 0,
});
</script>