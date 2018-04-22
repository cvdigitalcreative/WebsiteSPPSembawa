
  
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">Alumni</h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>

	<section class="page_content">
		<section class="span9 first">

			<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTGxYmRg_eZFmOTWaESliEFSCnPIrRug9BNY6NBvcvh4ziPC94Ti9m-4sFU_yp2uStFRQnOsxtflWFD/pubhtml?widget=true&amp;headers=false" width="135%" height="500" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			
			<br />
			<br />
			<br />
			<br />
			<table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th style="width: 20px;">No</th>
                  <th>Nama File</th>
                  <th>Tanggal</th>
                  <th>Author</th>
                  <th>Aksi</th>
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
          			<td style="text-align: center;"><a href="<?php echo base_url().'assets/files/'.$file?>" >
          				<img src="<?php echo base_url().'assets/img/View.png'?>" alt="Download" style=" width:11%;margin-bottom: 0px;">
          			</a></td>
          		</tr>
          		<?php endforeach;?>           
              </tbody>
            </table>
	
		</section>
	</section>
   
	</section>
 
  </section>
  