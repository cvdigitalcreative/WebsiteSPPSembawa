<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SMK Negeri SPP Sembawa</title>
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="description" content="Place your description here">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/update-responsive.css" type="text/css" media="all">
<!-- Slider -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslid.css" type="text/css" media="screen">
<!-- bootstrap css -->
<link rel="stylesheet" href=" <?php echo base_url();?>assets/css/bootstrap.css" type="text/css" media="screen">
<!-- cerousel css -->
<link rel="stylesheet" type="text/css" href=" <?php echo base_url();?>assets/css/elastislide.css" />
<!-- Lightbox -->
<link rel="stylesheet" href=" <?php echo base_url();?>assets/css/lightbox.min.css">
<!-- Style Switcher Box -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jsDatePick_ltr.css">
<!-- Right Hand Side Text Direction --> 
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/switcher.css">

<!-- skins -->
<link rel="stylesheet" name="skins" href="<?php echo base_url();?>assets/css/default.css" type="text/css" media="all">
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie_lt9.css">
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- jquery -->

  <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>
</head>
<body>
<div class="wrapper" >
 <!-- banner -->
  <section class="banner-bg home">  
	<!-- header -->
	
  <header id="header">
    <section class="container container-fluid">
      <h1 id="logo"><a href="index.html">Selamat Datang di Website SPP Sembawa</a></h1>
    </section>
  	<section class="nav-holder">
    	<section style="margin-left: auto;margin-right: auto;width: 1170px;">
    		<nav id="nav">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
             <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
             <div class="nav-collapse collapse">
			
              <ul class="nav">
                <!--<li class="active"> <a href="index.html">Home</a> </li>-->
			<li class="dropdown active"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Home<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="index.html">Profil</a></li>
                  </ul>
                </li>
				<li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Civitas<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
					<li> <a href="about.html#vision">Peserta Didik</a> </li>
					<li> <a href="about.html#who"> Guru dan Tenaga Kerja</a> </li>
					<li> <a href="about.html#wwd"> Alumni</a> </li>
                  </ul>
                </li>
			<li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Kurikulum<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
					<li> <a href="priorities_arts_culture.html">Kalender Pendidikan</a> </li>
					<li> <a href="priorities_business_economy.html">Jadwal</a> </li>
					<li> <a href="priorities_healthcare.html">Jadwal Piket Kelas</a> </li>
                  </ul>
                </li>
				
				<li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sarana Prasarana<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="event-listing.html">Sapras Sekolah</a></li>
          	    	<li><a href="event-detail.html">TUK</a></li>
                	<li><a href="event-venue.html">Gedung</a></li>
                  <li><a href="event-venue.html">Laboratorium</a></li>
                  <li><a href="event-venue.html">Lahan Praktikum</a></li>
                  </ul>
                </li>
				
				<li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Informasi Publik <b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="newsroom_press_release.html">Informasi Publik Berkala</a></li>
          	    	<li><a href="newsroom_city_news.html">Informasi Publik Setiap Saat</a></li>
                  <li><a href="newsroom_city_news.html">Setiap Saat</a></li>
                  <li><a href="newsroom_city_news.html">Serta Merta</a></li>
                  <li><a href="newsroom_city_news.html">Form Permintaan Informasi Publik</a></li>
                  <li><a href="newsroom_city_news.html">Laporan Kegitan</a></li>
                  </ul>
                </li>
				
				<li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="ec_sv.html">Gallery Photo</a></li>
          	    	  <li><a href="ec_mv.html">Gallery Video</a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Hubungi Kami</a></li>   

       <article class="span3 form_search" style="margin-left: 19px;">
            <form action="#" method="post" id="search_form" name="serach_form">
              <input class="error-field text" type="text" name="">
              <input class="send-btn search_ico" type="submit" name="" value="Submit">
            </form>
        </article>  
        
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

  <section class="container container-fluid home_slider">
  <section class="home_slider_top"><img src="<?php echo base_url()?>assets/images/slider_top_img.png" alt="" /></section>
  <div class="flexslider banner_slider">
  <ul class="slides">

    <?php foreach ($headline->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
     ?>
  <li>
    <div class="home_slider_caption"> 
      <div class="slider_content">
        <strong><?php echo $post_judul?></strong>
        <p> <?php echo limit_words($post_isi,13).'...';?></p>
      </div>
    <div class="slider_readmore">     <a href="#"> Read More > </a> </div>
  </div>
      <img src="<?php echo base_url().'assets/images/'.$post_image;?>"  alt="" />
    </li>
    <?php endforeach ?>
    </ul>
    
</div>
</section>
 	
	</section>

 <!-- Content -->
  <section class="news-bar">
  	<section class="container container-fluid">
		<figure class="row-fluid">
		<article class="span9 first">
    	<div class="testimonials">
<!-- 		<strong> Top Headlines: </strong> -->
            <div class="flexslider">
<!--           <ul class="slides">
            <li class="slide-image"> <div class="caption">
              <p> Us Goverment has annonced $ 5.5 Millison AID for refugues of Afghanistan in a  Congress Meeting <a href="#"> more </a> </p>
              </div> </li>
            <li class="slide-image"> <div class="caption">
              <p> Goverment has annon ced $ 5.5 Millison AID for refugues of Afghanistan in a  Congress Meeting <a href="#"> more </a> </p>
              </div> </li>
            <li class="slide-image"> <div class="caption">
              <p> Goverment has annonced $ 5.5 Millison AID for refugues of Afghanistan in a  Congress Meeting <a href="#"> more </a> </p>
              </div> </li>
            <li class="slide-image"> <div class="caption">
              <p> Us Goverment has annonced $ 5.5 Millison AID for refugues of Afghanistan in a  Congress Meeting <a href="#"> more </a> </p>
              </div> </li>
          </ul> -->
        </div>
        </div>
		</article>
		</figure>
    </section>
  </section>
  
  <section class="content-holder">
    <section >
   	  <section class="row-fluid">	
      <figure class="span9">
   
    	 <figure class="span12">
        <h2 style='border-bottom: 6px solid #9a1a33;'><span style="margin-left: 48px;">Jadwal</span></h2>
        	
        <?php foreach ($jadwal->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
         ?>
         <a href="dada">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul;?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,16).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/1'?>" class="see-btn">Lihat Lagi</a></div>
      </figure>

      <figure class="span12" style="margin-top: 22px;margin-left: 4px;">
        <h2 style='border-bottom: 6px solid #9a1a33;'><span style="margin-left: 48px;">Kampusku</span></h2>
          
        <?php foreach ($kampusku->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
         ?>
         <a href="dada">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul;?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,16).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/2'?>" class="see-btn">Lihat Lagi</a></div>
        </figure>

      <figure class="span12" style="margin-top: 22px;margin-left: 4px;">
        <h2 style='border-bottom: 6px solid #9a1a33;'><span style="margin-left: 48px;">Kegiatan Minggu Ini</span></h2>
          
        <?php foreach ($minggu->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
         ?>
         <a href="dada">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul;?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,16).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/3'?>" class="see-btn">Lihat Lagi</a></div>
        </figure>

      <figure class="span12" style="margin-top: 22px;margin-left: 4px;">
        <h2 style='border-bottom: 6px solid #9a1a33;'><span style="margin-left: 48px;">Kerja Sama</span></h2>
          
        <?php foreach ($kerjasama->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
         ?>
         <a href="dada">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul;?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,16).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/5'?>" class="see-btn">Lihat Lagi</a></div>
        </figure>

      <figure class="span12" style="margin-top: 22px;margin-left: 4px;">
        <h2 style='border-bottom: 6px solid #9a1a33;'><span style="margin-left: 48px;">Pengumuman</span></h2>
          
        <?php foreach ($pengumuman->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
         ?>
         <a href="dada">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul;?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,16).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/7'?>" class="see-btn">Lihat Lagi</a></div>
        </figure>

        <figure class="span12" style="margin-top: 22px;margin-left: 4px;">
        <h2 style='border-bottom: 6px solid #9a1a33;'><span style="margin-left: 48px;">Agenda</span></h2>
          
        <?php foreach ($agenda->result_array() as $i):
              $post_id=$i['tulisan_id'];
              $post_judul=$i['tulisan_judul'];
              $post_isi=$i['tulisan_isi'];
              $post_author=$i['tulisan_author'];
              $post_image=$i['tulisan_gambar'];
              $post_tglpost=$i['tanggal'];
              $post_slug=$i['tulisan_slug'];
         ?>
         <a href="dada">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul;?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,16).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/8'?>" class="see-btn">Lihat Lagi</a></div>
        </figure>
</figure>

<figure class="span3" style="width: 245px;margin-left: 63px;margin-top: 35px;">
  <h2 style='border-bottom: 6px solid #9a1a33;'></h2>
          <!-- Carousel -->
            <div class="slid-holder">
              <div class="slid-holder-inner">
                    <div class="mini-slider">
                      <ul id="carousel" class="elastislide-list">
                            <li>
                              <a href="#"><img src="<?php echo base_url()?>assets/images/pol1.jpg" alt="image01" /></a>
                              <strong class="candidate-name">Ir. Mattobi'i, MP</strong>
                            </li>
                        </ul>
                    </div>
          <strong class="title2"> City Govt. Officials</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        </div>
                <strong class="title3">&nbsp;</strong>
            </div>
            <!-- Carousel End -->
            </figure>
           
  
       
	   
 </section>
    </section>
  </section>
    </section>
  </section> 
    <footer id="footer">
    <p>Copyright © 2013 Designed by: <a href="#">CrunchPress</a></p>
  </footer>

  
  </div>
<div class="switcher"></div>
<!-- Social Icons No Script -->
    <noscript>
		<style>
            #socialicons>a span {
                top: 0px;
                left: -100%;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            #socialicons>ahover div{
                left: 0px;
            }
        </style>
    </noscript>
<!-- Social Icons No Script -->
<script src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/modernizr.custom.17475.js"></script>
 <script src="<?php echo base_url()?>assets/js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/focus.js"></script><!-- clear input -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script><!-- bootstrap -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/lightbox.js"></script><!-- bootstrap -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.elastislide.js"></script><!-- Cerousel -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/slider.js"></script><!-- FlexiSlider -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/social.js"></script><!-- Social -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script><!-- Custom -->
 <script type="text/javascript">
  /* <![CDATA[ */
    if ( jQuery('#calander_div').length > 0 ) {
 	window.onload = function(){
		g_globalObject = new JsDatePick({
			useMode:1,
			isStripped:true,
			target:"calander_div",
			cellColorScheme:"purple"
		});		
		};
		}    

	/*# Carousel Function #*/
    jQuery( '#carousel' ).elastislide();
    jQuery(document).ready(function($) {
	// Social Icons Function **/
		$('.switch_toggle').click(function(){
			$(this).next('.filter').slideToggle();
			$(this).toggleClass("minus_icon"); 
		});
		$('.social_active').hoverdir( {} );
	})
		/* ]]> */
	</script>
<script src="<?php echo base_url()?>assets/js/cockies.js"></script> <!-- jQuery cookie --> 
<script src="<?php echo base_url()?>assets/js/styleswi.js"></script> <!-- Style Switcher --> 

</body>
</html>