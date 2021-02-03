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
      <img class="img-fluid mr-1 mb-1 rounded-circle" id="cardicon1" src="IMG/FEE.webp">
      Hostel Fee Structure
    </h2>
    <div class="jumbotron mt-lg-2 mx-auto" id="SPBG" data-aos="fade-up">
      <table class="table table-bordered" data-aos="fade">
        <thead>
          <tr>
            <th scope="col">Hostel Fee Heads </th>
            <th scope="col">Fresh admission (Rs.) </th>
            <th scope="col">Re-admission (Rs.) </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Caution Money (Refundable) </td>
            <td>5,000 </td>
            <td>-</td>
          </tr>
          <tr>
            <td>Admission Fee (Non-refundable) </td>
            <td>500 </td>
            <td>-</td>
          </tr>
          <tr>
            <td>Establishment Fee </td>
            <td>18,000 </td>
            <td>18,000 </td>
          </tr>
          <tr>
            <td>Room Rent </td>
            <td>7,200</td>
            <td>7,200 </td>
          </tr>
          <tr>
            <td>Water charges</td>
            <td>6,000 </td>
            <td>6,000 </td>
          </tr>
          <tr>
            <td>Electricity</td>
            <td>9,600</td>
            <td>9,600 </td>
          </tr>
          <tr>
            <td>Other Amenities</td>
            <td>10,000 </td>
            <td>10,000 </td>
          </tr>
          <tr>
            <td>Activities</td>
            <td>6,000</td>
            <td>6,000 </td>
          </tr>
          <tr>
            <td>Contingency Expenses</td>
            <td>2,000 </td>
            <td>2,000 </td>
          </tr>
          <tr>
            <td>Maintenance and repairs </td>
            <td>1,000</td>
            <td>1,000 </td>
          </tr>
          <tr>
            <td><b>Total</b></td>
            <td><b>65,300</b></td>
            <td><b>59,800 </b> </td>
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