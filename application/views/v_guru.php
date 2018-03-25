
  
	</section>

	
  <section class="content-holder b-none inner_content" style="margin-top: 50px;">
  
  	<section class="container container-fluid">

	          <section class="row-fluid">

		<h2 class="heading">  <span> Guru </span>dan <span>Tenaga Kerja</span> </h2>
		<span class="border-line m-bottom" style="margin-top: 5px;margin-left: -19px;"></span>
	<section class="page_content">
		<section class="span12 first">
			<table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>L/P</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lagir</th>
                  <th>Jenis GTK</th>
                </tr>
              </thead>
              <tbody>
          		 <?php
          		 		$b = $data->result_array();
          				$size = sizeof($b);
          				for($i=0;$i<$size;$i++){
          		?> 
          		<tr>
          			<td style="text-align: center;"><?php echo $i+1?></td>
          			<td style="text-align: center;"></td>
          			<td><?php echo $b[$i]['nik']?></td>
          			<td><?php echo $b[$i]['guru_nama']?></td>
          			<td><?php echo $b[$i]['guru_kelamin']?></td>
          			<td><?php echo $b[$i]['guru_tempat']?></td>
          			<td><?php echo $b[$i]['guru_tanggal']?></td>
          			<td><?php echo $b[$i]['guru_jenis']?></td>
          		</tr>
          		<?php }?>
              </tbody>
            </table>
		</section>
	</section>
   
	</section>
 
  </section>
