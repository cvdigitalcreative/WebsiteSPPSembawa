
  
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">  <span> Informasi Publik Berkala</span> </h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>
		
	<section class="page_content">
		<section class="span9 first">

			<table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th style="width: 20px;">No</th>
                  <th>Nama File</th>
                  <th>Tanggal</th>
                  <th>Author</th>
                  <th>Unduh</th>
                </tr>
              </thead>
              <tbody>
          		<?php
                        $no=0;
                        foreach ($data->result_array() as $d) :
                            $no++;
                            $id=$d['file_id'];
                            $judul=$d['file_judul'];
                            $deskripsi=$d['file_deskripsi'];
                            $oleh=$d['file_oleh'];
                            $tanggal=$d['tanggal'];
                            $download=$d['file_download'];
                            $file=$d['file_data'];
                ?>
          		<tr>
          			<td style="text-align: center;"><?php echo $no?></td>
          			<td><?php echo $judul?></td>
          			<td><?php echo $tanggal?></td>
          			<td><?php echo $oleh?></td>
          			<td style="text-align: center;"><a href="<?php echo base_url().'assets/file/'.$file?>" download>
          				<img src="<?php echo base_url().'assets/img/download.png'?>" alt="Download" style=" width:17%;">
          			</a></td>
          		</tr>
          		<?php endforeach;?>
              </tbody>
            </table>
			
			

	
		</section>
	</section>
   
	</section>
 
  </section>
  