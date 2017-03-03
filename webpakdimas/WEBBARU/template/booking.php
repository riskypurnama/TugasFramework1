<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Reza's Hotel | Booking</title>
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
  <div id="header">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">Reza's</a></h1>
          <em>Hotel</em> <strong>True Luxury</strong> </div>
        <div class="phones"> 085241737009<br />
          08523456789 </div>
      </div>
    </div>
    <div class="row-2">
      <div class="indent">
        <!-- header-box begin -->
        <div class="header-box">
          <div class="inner">
            <ul class="nav">
              <li><a href="index.php">Beranda</a></li>
              <li><a href="Layanan.php">Layanan</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="restaurant.php">Restaurant</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
              <li><a href="booking.php" class="current">Booking</a></li>
            </ul>
          </div>
        </div>
        <!-- header-box end -->
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="content">
    <div class="wrapper">
      <div class="aside maxheight">
        <!-- box begin -->
        <div class="box maxheight">
          <div class="inner">
            <h3>Reservation:</h3>
            <form action="daftar.php" method="post" >
              <fieldset>
                <div class="field">
                  <label>Check In:</label><br/>
                  <select name="tgl1">
				      <?php include "koneksi.php";
				        for($tgl=1;$tgl<=31;$tgl++){
				            echo "<option value=$tgl>$tgl</option>";
				        }
				    ?>
				  </select>
				  <select name="bln1">
				      <?php
				        for($bln=1;$bln<=12;$bln++){
				            echo "<option value=$bln>$bln</option>";
				        }
				    ?>
				  </select>
				  <select name="thn1">
				      <?php
				        for($thn=2012;$thn<=2014;$thn++){
				            echo "<option value=$thn>$thn</option>";
				        }
				    ?>
				  </select>
                </div>
				
                <div class="field">
                  <label>Check Out:</label><br/>
                  <select name="tgl2">
				      <?php
				        for($tgl=1;$tgl<=31;$tgl++){
				            echo "<option value=$tgl>$tgl</option>";
				        }
				    ?>
				  </select>
				  <select name="bln2">
				      <?php
				        for($bln=1;$bln<=12;$bln++){
				            echo "<option value=$bln>$bln</option>";
				        }
				    ?>
				  </select>
				  <select name="thn2">
				      <?php
				        for($thn=2012;$thn<=2015;$thn++){
				            echo "<option value=$thn>$thn</option>";
				        }
				    ?>
				  </select>
                </div>
				<div class="field"><br/> 
				 Type Kamar: &nbsp;    <select name="type"/>
                  <option >Ekonomi</option>
				  <option>Bisnis</option>
				  <option selected>Premium</option>
				  </select>
				<br/><br/>
				  Kamar: <input type="text" name="jumlah" value="1" size="2" /><br/>
				  Nama Anda: <input type="text" size="20" name="nama" /> &nbsp;
				  
                </div>
				<br/>
                <div class="button1"><span><span><input type="submit" value=" Pesan "></span></span></div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- box end -->
      </div>
      <div class="content">
        <div class="indent">
          <h2>Our location</h2>
          <img class="img-indent png" alt="" src="images/5page-img1.png" />
          <div class="extra-wrap">
            <p class="alt-top">Kami berlokasi di sekitar ring road utara. - Dan terdapat di skitar Mall, Rumah sakit dan Kampus</p>
            <p>Luangkan waktu Anda bersma kami di:</p>
            <dl class="contacts-list">
              <dt>Yogyakarta, 210</dt>
              <dd>085241737009</dd>
              <dd>08523456789</dd>
            </dl>
          </div>
          <div class="clear"></div>
        </div>
      </div>
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
      <li><a href="#">Booking</a></li>
    </ul>
    <div class="wrapper">
      <div class="fleft">Copyright &copy; 2013 Lukman Reza</a>. All Rights Reserved</div>
      <<div class="fright">Designed by Lukman Reza - website templates provider</div>
    </div>
  </div>
</div></body>
</html>
