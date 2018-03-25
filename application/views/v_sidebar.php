<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

?>
<body>
    <?php 
      $cek1 = "";
      $cek2 = "";
      $cek3 = "";
      $cek4 = "";
      $cek5 = "";
      $cek6 = "";
      $cek7 = "";
      $cek8 = "";
     
      
      if(isset($side)){
         switch ($side) {
          case 1:
            $cek1 = "active";
            break;
            case 2:
            $cek2 = "active";
            break;
            case 3:
            $cek3 = "active";
            break;
            case 4:
            $cek4 = "active";
            break;
            case 5:
            $cek5 = "active";
            break;
            case 6:
            $cek6 = "active";
            break;
            case 7:
            $cek7 = "active";
            break;
            case 8:
            $cek8 = "active";
            break;

         }
      }
    ?>
<div class="wrapper inner_page">
 
    <section class="banner-bg h400">  
	<!-- header -->
	
  <header id="header">
    <section class="container container-fluid">
      <h1 ><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/Logo1.png" style="width: 192px;"></a></h1>
    </section>
  	<section class="nav-holder">
    	<section style="margin-left: 178px;">
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
          <li> <a href="<?php echo base_url().'Kurikulum/jadwal'?>">Jadwal</a> </li>
          <li> <a href="<?php echo base_url().'Kurikulum/jadwal_piket'?>">Jadwal Piket Kelas</a> </li>
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
                  <li><a href="<?php echo base_url().'Informasi/laporan_kegiatan'?>">Laporan Kegitan</a></li>
                  </ul>
        </li>
				
				<li class="dropdown <?php echo $cek7?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Gallery'?>">Gallery<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  	<li><a href="<?php echo base_url().'Gallery'?>">Gallery Photo</a></li>
          	    	  <li><a href="<?php echo base_url().'Gallery/video'?>">Gallery Video</a></li>
                  </ul>
                </li>
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