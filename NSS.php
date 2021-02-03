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
  <link rel="stylesheet" type="text/css" href="CSS/Aos.css">
  <link rel="stylesheet" type="text/css" href="CSS/Photos.css">
  <link rel="stylesheet" type="text/css" href="CSS/Gallery.css"> </head>

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
      <img class="img-fluid mr-1 mb-1" id="cardicon1" src="IMG/NSS.webp">
      NSS (National Service Scheme)
    </h2>
    <p class="ml-lg-4" id="textp" data-aos="fade-right"> The College also has a National Service Scheme (NSS) unit that promotes community service through events like cleanliness drives, free health checkup camps, blood donation camps, self-defence classes for girls, lectures on health and nutrition, educational camps in slums, anti-tobacco campaign, street rallies in nearby areas for spreading awareness about prevention of polio and dengue, etc </p>
    <div class="tz-gallery">
      <div class="row">
        <div class="w-50 mx-auto" data-aos="zoom-in" data-aos-delay="150">
          <a class="lightbox" href="IMG/NSS1.webp"> <img src="IMG/NSS1.webp" alt="1"> </a>
        </div>
      </div>
      <div class="jumbotron mt-2 mx-auto" id="SPBG" data-aos="fade-up">
        <h5 class="text-white mb-3" id="titleup" data-aos="fade-right">
       <img class="img-fluid mr-1 mb-1 " id="cardicon1" src="IMG/GROUP2.webp">
     NSS Unit </h5>
        <table class="table table-bordered" id="background" data-aos="fade-up">
          <thead>
            <tr>
              <th scope="col">Sr. No</th>
              <th scope="col">Name</th>
              <th scope="col">Designation</th>
              <th scope="col">Course</th>
              <th scope="col">Batch</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1</td>
              <td>Mr. Rahul Pareek</td>
              <td>President</td>
              <td>B.Sc.(H) Electronics</td>
              <td>2018-2021</td>
            </tr>
            <tr>
              <td scope="row">2</td>
              <td>Mr. Sachin Tyagi</td>
              <td>Vice President</td>
              <td>B.Sc.(H) Physics</td>
              <td>2018-2021</td>
            </tr>
            <tr>
              <td scope="row">3</td>
              <td>Ms. Muskan Saini</td>
              <td>Secretary</td>
              <td>B.A.(H) Psychology</td>
              <td>2018-2021</td>
            </tr>
            <tr>
              <td scope="row">4</td>
              <td>Mr. Bhavesh Yadav</td>
              <td>Treasurer</td>
              <td>B.M.S.</td>
              <td>2019-2022</td>
            </tr>
          </tbody>
        </table>
        <h5 class="text-white mb-3" id="titleup" data-aos="fade-right">
     <img class="img-fluid mr-1 mb-1 " id="cardicon1" src="IMG/ACTIVITY.webp">
   NSS Activity</h5>
        <div class="container text-white" id="list" data-aos="fade">
          <ul class="list-group ">
            <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/nss/KMVIndependenceDayReport15.08.20.pdf">Independence Day Celebration’20
        </a> </li>
            <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/nss/Prayatan.pdf">NSS Newsletter Prayatan
        </a> </li>
            <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/nss/KMVYogaDayReport20.06.20.pdf">Yoga Day Report 20.06.20
        </a> </li>
            <li class="list-group-item m-1"> <i class="fa fa-file-pdf-o mr-2 " id="pdf"></i><a href="uploads/nss/nss18.pdf">NSS Activity 2018-2019
        </a> </li>
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
<script type="text/javascript" src="JS/Gallery.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
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