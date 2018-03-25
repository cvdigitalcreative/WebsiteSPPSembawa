

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
    <div class="slider_readmore">     <a href="<?php echo base_url().'Artikel/'.$post_slug;?>"> Read More > </a> </div>
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

        </div>
		</article>
		</figure>
    </section>
  </section>
  
  <section class="content-holder">
    <section >
   	  <section class="row-fluid">	
      <figure class="span9">
   
    	 <figure class="span12" style="margin-top: 22px;margin-left: 4px;">
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
         <a href="<?php echo base_url().'Artikel/'.$post_slug;?>">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,10).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
      </figure>
      <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/1'?>" class="see-btn">Lihat Lagi</a></div>

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
         <a href="<?php echo base_url().'Artikel/'.$post_slug;?>">
          <figure class="span4 services">
               <div class="slid-holder b0">
                <div class="slid-holder-inner">
                   <img src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="Law and Order"/>
                   <strong class="title"><?php echo $post_judul?></strong>
                   <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                   <p><?php echo limit_words($post_isi,10).'...';?></p>
                </div>
               </div>
          </figure>
          </a>
        <?php endforeach ?>
        </figure>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/2'?>" class="see-btn">Lihat Lagi</a></div>

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
         <a href="<?php echo base_url().'Artikel/'.$post_slug;?>">
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
        </figure>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/3'?>" class="see-btn">Lihat Lagi</a></div>

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
         <a href="<?php echo base_url().'Artikel/'.$post_slug;?>">
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
        </figure>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/5'?>" class="see-btn">Lihat Lagi</a></div>

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
         <a href="<?php echo base_url().'Artikel/'.$post_slug;?>">
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
        </figure>
        <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/7'?>" class="see-btn">Lihat Lagi</a></div>

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
         <a href="<?php echo base_url().'Artikel/'.$post_slug;?>">
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
        </figure>
                <div class="btn-bar"><a href="<?php echo base_url().'Artikel/kategori/8'?>" class="see-btn">Lihat Lagi</a></div>

</figure>

<figure class="span3" style="width: 245px;margin-left: 63px;margin-top: 35px;">
  <h2 style='border-bottom: 6px solid #9a1a33;'></h2>
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
            </figure>
           
  
       
	   
 </section>
    </section>
  </section>
    </section>
  </section> 
    