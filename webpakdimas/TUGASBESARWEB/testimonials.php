<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>JULIANS HOTEL | Testimonials</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<link href="ie_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');</script>
<![endif]-->
</head>
<body id="page5" onload="new ElementMaxHeight();">
<div id="main">
  <!-- header -->
  <div id="header" class="small">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">JULIANS</a></h1>
          <em>Hotel</em> <strong>True Luxury</strong> </div>
        <div class="phones"> 082257296279<br />
          081555351444 </div>
      </div>
    </div>
    <div class="row-2 alt">
      <div class="indent">
        <!-- header-box-small begin -->
        <div class="header-box-small">
          <div class="inner">
            <ul class="nav">
              <li><a href="index.php">Beranda</a></li>
              <li><a href="Layanan.php">Layanan</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="restaurant.php">Restaurant</a></li>
              <li><a href="testimonials.php" class="current">Testimonials</a></li>
              <li><a href="booking.php">Booking</a></li>
            </ul>
          </div>
        </div>
        <!-- header-box-small end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="content">
    <div class="gallery">
      <ul>
        <li><a href="#"><img alt="" src="images/2page-img1.jpg" /></a></li>
        <li><a href="#"><img alt="" src="images/2page-img2.jpg" /></a></li>
        <li><a href="#"><img alt="" src="images/2page-img3.jpg" /></a></li>
        <li><a href="#"><img alt="" src="images/2page-img4.jpg" /></a></li>
        <li><a href="#"><img alt="" src="images/2page-img5.jpg" /></a></li>
        <li><a href="#"><img alt="" src="images/2page-img6.jpg" /></a></li>
      </ul>
    </div>
    <div class="indent">
      <h2>Customers’ testimonials</h2>
      <ul class="list4">
	  <li> <img alt="" src="images/img-empty.png" class="png" />
		<?php include "koneksi.php";
			$komentar = mysql_query("SELECT * FROM komentar ");
			while($komen = mysql_fetch_object($komentar)):
			
			echo "<h6>".$komen->namak." </h6> ";
			echo "<p>".$komen->komen."</li>";
			endwhile;
			;?>		
        
          <div class="button1"><span><span><a href="#">SUBMIT YOUR OWN TESTIMONIAL</a></span></span></div>
        <li> <img alt="" src="images/img-empty.png" class="png" />
          
			<table align="center">
			<form method="POST" action="post_testi.php">
			<tr><td>nama </td><td>: <input type="text" name="namak"></input><br></td></tr>
			<tr><td>komentar</td> <td>:<textarea name="komen"></textarea><br></td></tr>
			<tr><td><input type="submit" value="kirim"></input></td></tr>
			</form>
			</table>



      
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
    <ul class="nav">
      <li><a href="#">Home</a>|</li>
      <li><a href="#">Layanan</a>|</li>
      <li><a href="#">Gallery</a>|</li>
      <li><a href="#">Restaurant</a>|</li>
      <li><a href="#">Testimonials</a>|</li>
      <li><a href="#">Booking</a>|</li>
      <li><a href="../admin/list_pemesan.php">ADMIN</a></li>
    </ul>
    <div class="wrapper">
    </div>
  </div>
</div></body>
</html>
