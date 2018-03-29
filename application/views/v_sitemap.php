
  
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">Sitemap</h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>
		
	<section class="page_content">
		<section class="span9">
			<ul>
			<li> <a href="<?php echo base_url()?>" >HOME</b> </a>
                <ul>
                  	<li><a href="<?php echo base_url(). 'Home/profil'?>">PROFIL</a></li>
                </ul>
            </li>
            &nbsp;
			<li> <a href="<?php echo base_url().'Civitas'?>">CIVITAS</a>
                  <ul>
					<li> <a href="<?php echo base_url().'Civitas'?>">PESERTA DIDIK</a> </li>
					<li> <a href="<?php echo base_url().'Civitas/guru'?>"> GURU DAN TENAGA KERJA</a> </li>
					<li> <a href="<?php echo base_url().'Civitas/alumni'?>"> ALUMNI</a> </li>
                  </ul>
            </li>
      		&nbsp;
      		<li class="dropdown <?php echo $cek3?>"> <a class="dropdown-toggle" href="<?php echo base_url().'Ppdb'?>">PPDB</a></li>
			&nbsp;
      		<li> <a href="<?php echo base_url().'Kurikulum'?>" >KURIKULUM</b> </a>
		        <ul class="dropdown-menu">
		       		<li> <a href="<?php echo base_url().'Kurikulum'?>">KALENDER AKADEMIK</a> </li>
		       		<li> <a href="<?php echo base_url().'Kurikulum'?>">DAPODIK</a> </li>
		        </ul>
		    </li>
			&nbsp;	
			<li> <a href="<?php echo base_url().'Sarana'?>" >SARANA DAN PRASARANA</a>
                  <ul>
                  	<li><a href="<?php echo base_url().'Sarana'?>">SAPRAS SEKOLAH</a></li>
          	    	<li><a href="<?php echo base_url().'Sarana/tuk'?>">TUK</a></li>
                	<li><a href="<?php echo base_url().'Sarana/gedung'?>">GEDUNG</a></li>
                  	<li><a href="<?php echo base_url().'Sarana/laboratorium'?>">LABORATORIUM</a></li>
                  	<li><a href="<?php echo base_url().'Sarana/lahan_praktikum'?>">LAHAN PRAKTIKUM</a></li>
                  </ul>
        	</li>
			&nbsp;
			<li> <a href="<?php echo base_url().'Artikel/'?>">INFORMASI PUBLIK</a>
                  <ul>
                  	<li><a href="<?php echo base_url().'Artikel/'?>">BERITA</a></li>
                  	<li><a href="<?php echo base_url().'Informasi/informasi_publik_berkala'?>">INFORMASI PUBLIK BERKALA</a></li>
          	    	<li><a href="<?php echo base_url().'Informasi/informasi_publik_setiap_saat'?>">INFORMASI PUBLIK SETIAP SAAT</a></li>
                  	<li><a href="<?php echo base_url().'Informasi/setiap_saat'?>">SETIAP SAAT</a></li>
                  	<li><a href="<?php echo base_url().'Informasi/serta_merta'?>">SERTA MERTA</a></li>
                  	<li><a href="<?php echo base_url().'Informasi/form_permintaan'?>">FORM PERMINTAAN INFORMASI PUBLIK</a></li>
                  	<li><a href="https://kegpertanian.wordpress.com/">LAPORAN KEGIATAN</a></li>
                  </ul>
        	</li>
			&nbsp;	
			<li> <a href="<?php echo base_url().'Gallery'?>">GALLERY</a>
                  <ul>
                  	  <li><a href="<?php echo base_url().'Gallery'?>">GALLERY FOTO</a></li>
          	    	  <li><a href="<?php echo base_url().'Gallery/video'?>">GALLERY VIDEO</a></li>
                  </ul>
            </li>
            &nbsp;
            <li> <a href="<?php echo base_url(). 'Informasi/sitemap'?>">SITEMAP</a></li>
            &nbsp;
        	<li> <a href="<?php echo base_url(). 'Informasi/hubungi_kami'?>">HUBUNGI</a></li>
              </ul>
			</section>
	</section>
  <figure class="span3" style="width: 245px;margin-left: 34px;margin-top: 6px;">
          <blockquote>
          <h2 style='border-bottom: 6px solid #3a813c; width: 243px;margin-left: -15px;'></h2>
          <!-- Carousel -->
          <?php
          $b = $portofolio->row_array();
          $nama = $b['port_nama'];
          $deskripsi = $b['port_deskripsi'];
          $image = $b['port_image']
          ?>
            <div class="slid-holder">
              <div class="slid-holder-inner">
                    <div class="mini-slider">
                      <ul id="carousel" class="elastislide-list">
                            <li style="margin-right: 0px;"">
                              <a href="#"><img src="<?php echo base_url().'assets/images/'.$image?>" alt="Ir. Mattobi'i, MP" /></a>
                              <strong class="candidate-name"><?php echo $nama?></strong>
                            </li>
                        </ul>
                    </div>
          <strong class="title2"> Kepala Sekolah</strong>
                    <p><?php echo limit_words($deskripsi,4).'...';?></p>

        </div>
                
            </div>
            <!-- Carousel End -->
            </blockquote>
            <blockquote>
                 <h2 style='border-bottom: 6px solid #3a813c;width: 243px;margin-left: -15px;'></h2>
          <!-- Carousel -->
                        <h3 style="margin-top: -1px;">Tautan</h3>
                        <span class="border-line m-bottom" style="margin-top: 5px;margin-left: -10px;"></span>
                          <ul class="nav nav-list">
                            <li><a href="http://bppsdmp.pertanian.go.id/id"><img src="<?php echo base_url().'assets/images/Kementan.png'?>" style="width: 36px;margin-right: 9px;">BPPSDMP</a></li>
                            <li ><a href="http://www.pertanian.go.id/"><img src="<?php echo base_url().'assets/images/Kementan.png'?>" style="width: 36px;margin-right: 9px;">KEMENTAN</a></li>
                            <li ><a href="http://cybex.pertanian.go.id/"><img src="<?php echo base_url().'assets/images/cybex.png'?>" style="width: 36px;margin-right: 9px;">Cyber Extension</a></li>
                            <li ><a href="http://www.sumselprov.go.id/index.php?module=content&id=1"><img src="<?php echo base_url().'assets/images/sumsel.png'?>" style="width: 36px;margin-right: 9px;">Provinsi SUMSEL</a></li>
                            <li ><a href="http://banyuasinkab.go.id/"><img src="<?php echo base_url().'assets/images/banyuasin.png'?>" style="width: 36px;margin-right: 9px;">Kabupaten Bayuasin</a></li>
                            <li ><a href="http://www.spmabanjarbaru.sch.id/"><img src="<?php echo base_url().'assets/images/banjarbaru.png'?>" style="width: 36px;margin-right: 9px;">SMK PP N Banjar Baru</a></li>
                          </ul>               
            <!-- Carousel End -->
            </blockquote>

            <blockquote style="margin-top: 35px;">
                 <h2 style='border-bottom: 6px solid #3a813c;width: 243px;margin-left: -15px;'></h2>
          <!-- Carousel -->
                        <h3 style="margin-top: -1px;">Pengunjung Hari Ini</h3>
                          <ul class="a-list">
                            <li style="margin-left: 13px;"><?php echo $visitor?></li>
                          </ul>

                        <h3 style="margin-top: 0px;">Total Pengunjung</h3>
                          <ul class="a-list">
                            <li style="margin-left: 13px;"><?php echo $total?></li>
                          </ul>      
            <!-- Carousel End -->
            </blockquote>
            </figure>
   
	</section>
 
</section>
  