<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>JULIANS HOTEL</title>
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
<body id="page1" onload="new ElementMaxHeight();">
<div id="main">
  <!-- header -->
  <div id="header">
    <div class="row-1">
      <div class="wrapper">
        <div class="logo">
          <h1><a href="#">JULIANS</a></h1>
          <em>Hotel</em> <strong>True Luxury</strong> </div>
        <div class="phones"> 082257296279<br />
          081555351444 </div>
      </div>
    </div>
    <div class="row-2">
      <div class="indent">
        <!-- header-box begin -->
        <div class="header-box">
          <div class="inner">
            <ul class="nav">
              <li><a href="index.php" class="current">Beranda</a></li>
              <li><a href="Layanan.php">Layanan</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="restaurant.php">Restaurant</a></li>
              <li><a href="testimonials.php">Testimonials</a></li>
              <li><a href="booking.php">Booking</a></li>
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
				        for($thn=2014;$thn<=2017;$thn++){
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
				        for($thn=2015;$thn<=2017;$thn++){
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
          <h2>Julians Hotel Senang Menyambut Anda!</h2>
          <img class="img-indent png" alt="" src="images/1page-img1.png" />
          <p class="alt-top">Datang sendiri atau bawa keluarga anda bersama anda, menetap disini untuk semalam atau seminggu, menetap dsini ketika dalam perjalan bisnis atau semacam konferensi - apapun itu kami meliki layanan yang Anda butuhkan.</p>
          Hubungi kami kapanpun Anda ingin menggunakan Layanan Kami.
          <div class="clear"></div>
          <div class="line-hor"></div>
          <div class="wrapper line-ver">
            <div class="col-1">
              <h3>Penawaran Spesial</h3>
              <ul>
                <li>Tv LED 30"</li>
                <li>50% Diskon untuk layanan restoran</li>
                <li>30% Diskon jika menginap 3 hari lebih</li>
                <li>Gratis minuman dalam kamar</li>
                <li>Souvenir yang Amazing</li>
              </ul>
              <div class="button"><span><span><a href="#">Pesan Sekarang!</a></span></span></div>
            </div>
            <div class="col-2">
              <h3>Lokasi</h3>
              <p>Kami berlokasi dibelakang balaikota.</p>
              <dl class="contacts-list">
                <dt>MALANG, 210</dt>
                <dd>082257296279</dd>
                <dd>081555351444</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
    <ul class="nav">
      <li><a href="#">Beranda</a>|</li>
      <li><a href="#">layanan</a>|</li>
      <li><a href="#">Gallery</a>|</li>
      <li><a href="#">Restaurant</a>|</li>
      <li><a href="#">Testimonials</a>|</li>
      <li><a href="#">Booking</a></li>
      <li><a href="../admin/list_pemesan.php">ADMIN</a></li>
    </ul>
    <div class="wrapper">
    </div>
  </div>
</div>
</body>
</html>
