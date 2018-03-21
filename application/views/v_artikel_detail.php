<?php
	error_reporting(0);
    $b=$data->row_array();
    $url=base_url().'artikel/'.$b['tulisan_slug'];
    $img=base_url().'assets/images/'.$b['tulisan_gambar'];
    $title=$b['tulisan_judul'];
    $author=$b['tulisan_author'];
    $date=$b['tanggal'];
    $kategori=$b['tulisan_kategori_nama'];
    $deskripsi=strip_tags($b['tulisan_isi']);
    $isi=$b['tulisan_isi'];
    $views=$b['tulisan_views'];
    $rating=$b['tulisan_rating'];


?>
 <?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title?></title>
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
</head>
<body>
<div class="wrapper inner_page">
 
    <section class="banner-bg h400">  
	<!-- header -->
	
  <header id="header">
    <section class="container container-fluid">
      <h1 id="logo"><a href="index.html">Local Government</a></h1>
    </section>
  	<section class="nav-holder">
    	<section class="container container-fluid">
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

	
  <section class="content-holder b-none inner_content">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading"> Our <span> Blog</span> </h2>

	<span class="border-line m-bottom"></span>
	
	<section class="page_content">
	
		<section class="span9 first">
			
			<article class="blog_detail_wrapper">
				<figure class="post_title"> <h2> <a href="#"> <span> <?php echo $date?> </span> <?php echo $title?>  </h2>	</a> </figure>
				<figure class="post_featured_image"> <img src="<?php echo $img;?>" alt="" /> </figure>
				<figure class="post_meta"> 
				<span> Posted by:  <a href="#"> Admin </a> </span> 
				<span> Kategori: <a href="#"> <?php echo $kategori;?> </a> </span>
				<span> Dilihat: <a href="#"><?php echo $views;?></a></span>
				<span> Rating: <a href="#"><?php echo $rating;?></a></span>  
				</figure>
				<figure class="post_description">				
					<p> <?php echo $isi?>  </p>
								<?php if($rate->num_rows()>0):?>

								<?php else:?>
								<div class="alert alert-success">
									<strong>Apakah pendapat Anda tentang artikel ini?</strong><br/><br/>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/good/'.$b['tulisan_slug'];?>" title="Good"><i class="fa fa-smile-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/like/'.$b['tulisan_slug'];?>" title="Like"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/love/'.$b['tulisan_slug'];?>" title="Love"><i class="fa fa-heart-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'blog/genius/'.$b['tulisan_slug'];?>" title="Genius"><i class="fa fa-lightbulb-o fa-2x"></i></a>
								</div>
								<?php endif;?>			
				</figure>
			</article>

		</section>
		
		<section class="span3 sidebar">
		
				<article class="widget">
			<form id="search_form" action="#" >
	
			<input type="text" class="text" value="Search Here..." name="s" />               
	
			<input type="submit" value="Submit" id="submit" class="search_ico" />
			</form>
			
			</article>

			<article class="widget">			
				<h2> Categories </h2>				
				<ul class="cat_widget list_widget">
					<?php foreach ($kat->result() as $i): ?>
						<li> <a href="<?php echo base_url().'Artikel/kategori/'.$i->kategori_id;?>"> <?php echo $i->kategori_nama;?> 	<span> (<?php echo $i->jml?>) </span> </a> </li>
					<?php endforeach ?>
				
				
				</ul>
			</article>	
			
				<article class="widget">
				
				<h2> Latest Post </h2> <!-- 20px -->
				
				
				<ul class="latest_post">
					<?php foreach ($terbaru->result() as $row): ?>
					<li>
						<img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /> 
						<span class="text_wrapper">
						<h3 title="<?php echo $row->tulisan_judul?>"> <?php echo limit_words($row->tulisan_judul,3).'...';?> </h3> 
						<p> <?php echo limit_words($row->tulisan_isi,7).'...';?> </p> 
						<a href="<?php echo base_url().'Artikel/'.$row->tulisan_slug;?>"> Keep Reading →</a>
						</span>
					</li>	
					<?php endforeach ?> 
				</ul>
				</article>

				<article class="widget">
				
				<h2> Popular Post </h2> <!-- 20px -->
				
				
				<ul class="latest_post">
					<?php foreach ($populer->result() as $row): ?>
					<li>
						<img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="" /> 
						<span class="text_wrapper">
						<h3 title="<?php echo $row->tulisan_judul?>"> <?php echo limit_words($row->tulisan_judul,3).'...';?> </h3> 
						<p> <?php echo limit_words($row->tulisan_isi,7).'...';?> </p> 
						<a href="<?php echo base_url().'Artikel/'.$row->tulisan_slug;?>"> Keep Reading →</a>
						</span>
					</li>	
					<?php endforeach ?> 
				</ul>
				</article>
				
				
	
		
		</section>
	
	</section>
	
	</section>
		  </section>
   
	</section>
 
  </section>
  
 
  <!-- footer -->
  <section class="footer-top">
  	<section class="container container-fluid">
    	<figure class="span4 first">
        	<h2>About <span>Our Town</span></h2>
            <p>Suspendisse ullamcorper adipiscing ligula, ut sollicitudin nulla tempus id. Aliquam vitae fermentum purus. Vestibulum sed arcu turpis, in aliquet tortor. Praesent augue sapien, malesuada ut scelerisque vitae, rhoncus in enim. Cras tincidunt tincidunt luctus. Fusce a nulla mauris, et convallis urna. </p>
        </figure>
        <figure class="span4">
        	<h2>Latest <span>News</span></h2>
            <p>Suspendisse ullamcorper adipiscing ligula, ut sollicitudin nulla tempus id. Aliquam vitae fermentum purus. </p>            <ul class="news-list">            	<li><a href="#"><img src="images/image10.jpg" alt="image10"></a></li>
                <li><a href="#"><img src="images/image10_1.jpg" alt="image10"></a></li>
                <li><a href="#"><img src="images/image10_2.jpg" alt="image10"></a></li>
</ul>
        </figure>
        <figure class="span4">
        	<h2>City<span> Council</span></h2>
            <ul class="a-list">
                <li><span>E</span> <a href="#">info@crunchpress.com</a></li>
                <li><span>P</span> (01) 9876 5432 </li>
                <li><span>F</span> (01) 9876 5433</li>
            </ul>
            <p>16 Street Name to go here<br>
					Country, 3940</p>
        </figure>
        
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