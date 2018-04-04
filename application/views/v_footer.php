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
  <footer id="footer">
    <p style="color: white;">Copyright © 2018 Designed by: <a style="color:#387f3a;" href="http://digitalcreative.web.id">Digital Creative</a></p>
  </footer>
</div>


<script src="<?php echo base_url()?>assets/js/jquery-1.9.1.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/modernizr.custom.17475.js"></script>
 <script src="<?php echo base_url()?>assets/js/jsDatePick.min.1.3.js"></script>
 <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/focus.js"></script><!-- clear input -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script><!-- bootstrap -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/lightbox.js"></script><!-- bootstrap -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.elastislide.js"></script><!-- Cerousel -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/slider.js"></script><!-- FlexiSlider -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/social.js"></script><!-- Social -->
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/custom.js"></script><!-- Custom -->
 <script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
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
	<script>
	$(document).ready(function(){
	    $('#myTable').DataTable();
	} );

	</script>
<script src="<?php echo base_url()?>assets/js/cockies.js"></script> <!-- jQuery cookie --> 

</body>
</html>