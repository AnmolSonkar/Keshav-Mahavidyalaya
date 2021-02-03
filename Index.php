<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Keshav Mahavidyalaya - Unofficial</title>
  <link rel="icon" href="#" type="image/png" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  <link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="CSS/Aos.css"> </head>

<body>
  <div class="d-none d-lg-block">
    <?php include("Socialbar.php")?>
  </div>
  <div class="d-lg-none">
    <?php include("Socialbar2.php")?>
  </div>
  <div class="d-lg-none">
    <?php include("Shortname.php")?>
  </div>
  <div>
    <?php include("Slideshow.php")?>
  </div>
  <div class="d-lg-none">
    <?php include("Sidebar.php"); ?>
  </div>
  <div class="d-none d-lg-block">
    <?php include("Navbar.php"); ?>
  </div>
  <div>
    <?php include("Cards.php")?>
  </div>
  <div>
    <?php include("Footer1.php")?>
  </div>
</body>

</html>
<script type="text/javascript">
//AOS Animation
AOS.init({
  offset: 50,
  duration: 600,
  delay: 0,
});
</script>

<script type="text/javascript">

 var visited = localStorage.getItem('visited');
  if (!visited) {
  alert("NOTE : This is not the official website of Keshav Mahavidyalaya,\nso please do not click on any payment link nor fill any form.\nThank you,\nHave a good day.");
  localStorage.setItem('visited', true);
}
</script>