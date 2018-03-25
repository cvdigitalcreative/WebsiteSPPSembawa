
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">  <span> Profil</span> </h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>

	<section class="page_content">
		<section class="span9 first">
			<article class="blog_detail_wrapper">
				<?php 
					$b=$portofolio->row_array();
					$isi = $b['port_deskripsi'];
					$views = $b['tulisan_views'];
					$date = $b['port_tanggal'];
					$author = $b['port_author'];
					$img=base_url().'assets/images/'.$b['port_image'];
				?>
				
				<figure class="post_meta"> 
				
				<span> Posted by:  <a href="#"> <?php echo $author;?> </a> </span> 
				<span> Dilihat: <a href="#"><?php echo $views;?></a></span>
				<span> Tanggal: <a href="#"><?php echo $date;?></a></span>  
				</figure>
				<figure class="post_description">				
					<p> <?php echo $isi?>  </p>		
				</figure>
			</article>
		</section>
		<figure class="span3" style="width: 245px;margin-left: 44px;margin-top: 35px;">
  			<h2 style='border-bottom: 6px solid #9a1a33;'></h2>
          <!-- Carousel -->
          <?php
          $b = $portofolio1->row_array();
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
  
 
 