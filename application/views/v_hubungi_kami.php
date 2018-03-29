<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hubungi Kami</title>
<meta name="description" content="Place your description here">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/update-responsive.css" type="text/css" media="all">
<!-- Slider -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslid.css" type="text/css" media="screen">
<!-- bootstrap css -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css" media="screen">
<!-- cerousel css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/elastislide.css" />
<!-- Lightbox -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/lightbox.min.css">
<!-- Style Switcher Box -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jsDatePick_ltr.css">
<!-- Right Hand Side Text Direction -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/switcher.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/skins/default.css">
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<!-- skins -->
<link rel="stylesheet" name="skins" href="<?php echo base_url()?>assets/css/default.css" type="text/css" media="all">
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie_lt9.css">
<![endif]-->
<!-- jquery -->
<?php echo $map['js'];?>
</head>	
<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

?>

<body>
<div class="wrapper inner_page">
 
    <section class="banner-bg h400">  
	<!-- header -->
	
  <header id="header">
    <section class="container container-fluid">
      <h1 ><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/Logo1.png" style="width: 192px;"></a></h1>
    </section>
  	<section class="nav-holder">
    	<section style="margin-left: 118px;">
    		<nav id="nav">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
             <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
             <div class="nav-collapse collapse">
			
              <ul class="nav">
                <!--<li class="active"> <a href="index.html">Home</a> </li>-->
			<li class="dropdown <?php echo $cek1?>"> <a class="dropdown-toggle" href="<?php echo base_url()?>" >Home<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="<?php echo base_url(). 'Home/profil'?>">Profil</a></li>
                  </ul>
                </li>
				<li class="dropdown <?php echo $cek2?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Civitas'?>">Civitas<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
					<li> <a href="<?php echo base_url().'Civitas'?>">Peserta Didik</a> </li>
					<li> <a href="<?php echo base_url().'Civitas/guru'?>"> Guru dan Tenaga Kerja</a> </li>
					<li> <a href="<?php echo base_url().'Civitas/alumni'?>"> Alumni</a> </li>
                  </ul>
                </li>
      
      <li class="dropdown <?php echo $cek3?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Ppdb'?>">PPDB</a></li>
			
      <li class="dropdown <?php echo $cek4?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Kurikulum'?>" >Kurikulum<b class="caret"></b> </a>
        <ul class="dropdown-menu">
       		<li> <a href="<?php echo base_url().'Kurikulum'?>">Kalender Pendidikan</a> </li>
          <li> <a href="<?php echo base_url().'Kurikulum'?>">DAPODIK</a> </li>
        </ul>
      </li>
				
				<li class="dropdown <?php echo $cek5?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Sarana'?>" >Sarana Prasarana<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="<?php echo base_url().'Sarana'?>">Sapras Sekolah</a></li>
          	    	<li><a href="<?php echo base_url().'Sarana/tuk'?>">TUK</a></li>
                	<li><a href="<?php echo base_url().'Sarana/gedung'?>">Gedung</a></li>
                  <li><a href="<?php echo base_url().'Sarana/laboratorium'?>">Laboratorium</a></li>
                  <li><a href="<?php echo base_url().'Sarana/lahan_praktikum'?>">Lahan Praktikum</a></li>
                  </ul>
        </li>
				
				<li class="dropdown <?php echo $cek6?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Artikel/'?>">Informasi Publik <b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="<?php echo base_url().'Artikel/'?>">Berita</a></li>
                  	<li><a href="<?php echo base_url().'Informasi/informasi_publik_berkala'?>">Informasi Publik Berkala</a></li>
          	    	<li><a href="<?php echo base_url().'Informasi/informasi_publik_setiap_saat'?>">Informasi Publik Setiap Saat</a></li>
                  <li><a href="<?php echo base_url().'Informasi/setiap_saat'?>">Setiap Saat</a></li>
                  <li><a href="<?php echo base_url().'Informasi/serta_merta'?>">Serta Merta</a></li>
                  <li><a href="<?php echo base_url().'Informasi/form_permintaan'?>">Form Permintaan Informasi Publik</a></li>
                  <li><a href="https://kegpertanian.wordpress.com/">Laporan Kegitan</a></li>
                  </ul>
        </li>
				
				<li class="dropdown <?php echo $cek7?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Gallery'?>">Gallery<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  	<li><a href="<?php echo base_url().'Gallery'?>">Gallery Photo</a></li>
          	    	  <li><a href="<?php echo base_url().'Gallery/video'?>">Gallery Video</a></li>
                  </ul>
                </li>
                <li class="dropdown <?php echo $cek9?>"> <a class="dropdown-toggle" href="<?php echo base_url(). 'Informasi/sitemap'?>">Sitemap</a></li>
        <li class="dropdown <?php echo $cek8?>"> <a class="dropdown-toggle" href="<?php echo base_url(). 'Informasi/hubungi_kami'?>">Hubungi Kami</a></li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!-- /.navbar-inner -->
        </div>
        <!-- /.navbar -->
      </nav>
  		</section>
    </section>
  </header>
  
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

					<h2 class="heading"> Contact <span> Us </span> </h2>

					<span class="border-line m-bottom"></span>
 

					<article class="page_content">
		
						<figure class="span12"> <?php echo $map['html'];?> </figure>
		
						<figure class="span4 first contact_sidebar"> 
		
							<h3> Find Us </h3>
		
								
								Jl. Palembang - Jambi KM.29, 19 Ilir, Palembang, Kota Palembang, Sumatera Selatan 30010 <br /><br/>
								Phone <a href="#"> (0711) 365553 </a> <br /><br/>
								Website <a href="https://www.smkppnsembawa.sch.id/"> smkppnsembawa.sch.id </a> <br /><br/>
								Email <a href="#" > sppnsembawa@yahoo.com</a> <br /><br/>
		
							<h3> Follow Us </h3>
					
								<div id="socialicons" class="hidden-phone">
								<a id="social_facebook" class="social_active" href="https://www.facebook.com/SMK-PP-Negeri-Sembawa-141728806448588/" title="Visit Facebook page"><span></span></a>	
								<a id="social_twitter" class="social_active" href="https://twitter.com/SMKPPN_SEMBAWA" title="Visit Twitter page"><span></span></a>	
								<a id="social_google_plus" class="social_active" href="#" title="Visit Google Plus page"><span></span></a>
								<a id="social_linkedin" class="social_active" href="https://www.linkedin.com/title/staff-at-kementan" title="Visit LinkedIn page"><span></span></a>
								<a id="social_youtube" class="social_active" href="https://www.youtube.com/channel/UCN9haidWqsrmRqp5BAhUNGw?view_as=subscriber" title="Visit Youtube page"><span></span></a>
								<a id="social_instagram" class="social_active" href="https://www.instagram.com/smkppn_sembawa/" title="Visit Instagram page"><span></span></a>			
								</div>
			
						</figure>
		       
						<figure class="span8"> 

							<h3> Leave us a Message </h3>
							<form id="contact_us" name="contact_us" action="<?php echo base_url().'Informasi/kirim_pesan'?>" method="post">
							<p> Name </p>
							<input type="text" placeholder="Nama" name="xnama" required />
							<p> Email </p>
							<input type="text" placeholder="Email" name="xemail" required />
							<p> Kontak </p>
							<input type="text" placeholder="Kontak" name="xkontak" required />
							<p> Comment </p>
							<textarea id="comments" cols="60" name="xpesan" rows="15" required> </textarea> <br />

              <?php echo $this->session->flashdata('msg');?>
							<input type="submit" value="Submit" name="submit" />
							</form>
						
						</figure>
	
					</article>

	</section>
   
	</section>
 
  </section>
  