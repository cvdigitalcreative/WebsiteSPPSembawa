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
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/Kementan.png'?>">
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
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">

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
      <h1><img src="<?php echo base_url()?>assets/images/Logo1.png" style="width: 192px;"><a href="<?php echo base_url()?>"></a></h1>
    </section>
  	<section class="nav-holder">
    	<section class="containernav-fluid">
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
       		<li> <a href="http://dapo.dikdasmen.kemdikbud.go.id/sekolah/964D53F4E9937D2E5327">DAPODIK</a> </li>
        </ul>
      </li>
				
				<li class="dropdown active"> <a class="dropdown-toggle" href="<?php echo base_url().'Sarana/kategori/9'?>" >Sarana Prasarana<b class="caret"></b> </a>
                  <ul class="dropdown-menu">
                  	<li><a href="<?php echo base_url().'Sarana/kategori/9'?>">Sapras Sekolah</a></li>
          	    	<li><a href="<?php echo base_url().'Sarana/kategori/10'?>">TUK</a></li>
                	<li><a href="<?php echo base_url().'Sarana/kategori/11'?>">Gedung</a></li>
                  <li><a href="<?php echo base_url().'Sarana/kategori/12'?>">Laboratorium</a></li>
                  <li><a href="<?php echo base_url().'Sarana/kategori/13'?>">Lahan Praktikum</a></li>
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
                <li class="dropdown"> <a class="dropdown-toggle" href="<?php echo base_url(). 'Informasi/sitemap'?>">Sitemap</a></li>
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

<!-- 		<h2 class="heading">Sarana dan Prasarana</h2>

	<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>
 -->	
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
									<a class="btn btn-sm" href="<?php echo base_url().'Artikel/good/'.$b['tulisan_slug'];?>" title="Good"><img src="<?php echo base_url().'assets/img/heart.png'?>"></a>
									<a class="btn btn-sm" href="<?php echo base_url().'Artikel/like/'.$b['tulisan_slug'];?>" title="Like"><img src="<?php echo base_url().'assets/img/like.png'?>"></a>
									<a class="btn btn-sm" href="<?php echo base_url().'Artikel/love/'.$b['tulisan_slug'];?>" title="bad"><img src="<?php echo base_url().'assets/img/cancel.png'?>"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'Artikel/genius/'.$b['tulisan_slug'];?>" title="Genius"><img src="<?php echo base_url().'assets/img/star.png'?>"></a>
								</div>
								<?php endif;?>			
				</figure>
			</article>

		</section>
		
		<section class="span3 sidebar">
		
				<article class="widget">
				<form id="search_form" action="<?php echo base_url().'Informasi/search'?>" method="post">
				<input type="text" class="text" value="Search Here..." name="xfilter" required>               
				<input type="submit" value="Submit" id="submit" class="search_ico" style="margin-bottom: -1px;">
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
  	<section class="container2-fluid">
    	<figure class="span3" style="margin-right: 50px;">
        	<h2>Tautan</h2>
            <ul class="a-list">
                <li><a href="http://bppsdmp.pertanian.go.id/id">BPPSDMP</a></li>
                <li><a href="http://www.pertanian.go.id/">KEMENTAN</a></li>
                <li><a href="http://cybex.pertanian.go.id/">Cyber Extension</a></li>
                <li><a href="http://www.sumselprov.go.id/index.php?module=content&id=1">Provinsi Sumatera Selatan</a></li>
                <li><a href="http://banyuasinkab.go.id/">Kabupaten Banyuasin</a></li>
                <li><a href="http://www.spmabanjarbaru.sch.id/">SMK PP Negeri Banjar Baru</a></li>
            </ul>
        </figure>
        <figure class="span3" style="margin-right: 50px;">
        	<h2>Kategori</h2>
            <ul class="a-list">
                <li><a href="<?php echo base_url().'Artikel/kategori/1'?>">Jadwal</a></li>
                <li><a href="<?php echo base_url().'Artikel/kategori/2'?>">KampusKu</a></li>
                <li><a href="<?php echo base_url().'Artikel/kategori/3'?>">Kegiatan Minggu Ini</a></li>
                <li><a href="<?php echo base_url().'Artikel/kategori/5'?>">Kerja Sama</a></li>
                <li><a href="<?php echo base_url().'Artikel/kategori/7'?>">Pengumuman</a></li>
                <li><a href="<?php echo base_url().'Artikel/kategori/8'?>">Agenda</a></li>
            </ul>
        </figure>
        <figure class="span3" style="margin-right: 92px;">
        	<h2>Hubungi Kami</h2>
            <ul class="a-list">
                <li style="margin-right: 10px;"><i class="icon-home icon-white"></i>Jl. Palembang - Jambi KM.29, 19 Ilir, Palembang, Kota Palembang, Sumatera Selatan 30010</li>
                <li style="margin-right: 10px;"><i class="icon-headphones icon-white"></i><(0711) 365553</li>
                <li style=""><i class="icon-bookmark icon-white"></i><a href="https://www.smkppnsembawa.sch.id/">smkppnsembawa.sch.id</a> </li>
                <li style="margin-right: 10px;"><i class="icon-envelope icon-white"></i>sppnsembawa@yahoo.com</li>
            </ul>
        </figure>
        <figure class="span2">
          <h2> Follow Us </h2>
          
                <div id="socialicons" class="hidden-phone">
                <a id="social_facebook" class="social_active" href="https://www.facebook.com/SMK-PP-Negeri-Sembawa-141728806448588/" title="Visit Facebook page"><span></span></a>  
                <a id="social_twitter" class="social_active" href="https://twitter.com/SMKPPN_SEMBAWA" title="Visit Twitter page"><span></span></a> 
                <a id="social_google_plus" class="social_active" href="#" title="Visit Google Plus page"><span></span></a>
                <a id="social_linkedin" class="social_active" href="https://www.linkedin.com/title/staff-at-kementan" title="Visit LinkedIn page"><span></span></a>
                <a id="social_youtube" class="social_active" href="https://www.youtube.com/channel/UCN9haidWqsrmRqp5BAhUNGw?view_as=subscriber" title="Visit Youtube page"><span></span></a>
                <a id="social_instagram" class="social_active" href="https://www.instagram.com/smkppn_sembawa/" title="Visit Instagram page"><span></span></a>      
                </div>
        </figure>
    </section>
  </section>
  <!-- footer -->
  <!-- footer -->
  <footer id="footer">
    <p style="color:white;">Copyright © 2018 Designed by: <a style="color:#387f3a;" href="http://digitalcreative.web.id">Digital Creative</a></p>
  </footer>
</div>

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
			/* Skins Style */
jQuery(document).ready(function(){ 

var cookieName = 'default';

function changeLayout(layout) {
jQuery.cookie(cookieName, layout);
jQuery('head link[name=skins]').attr('href', 'assets/css/skins/' + layout + '.css');
}

if( jQuery.cookie(cookieName)) {
changeLayout(jQuery.cookie(cookieName));
}

changeLayout('default');

});
	</script>
<script src="<?php echo base_url()?>assets/js/cockies.js"></script> <!-- jQuery cookie -->  <!-- Style Switcher --> 

</body>
</html>