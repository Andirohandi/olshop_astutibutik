<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<th style="text-align:center;width:5%">No</th>
					<th style="text-align:center;width:15%">NAMA KATEGORI</th>
					<th style="text-align:center;width:10%">STATUS</th>
					<th style="text-align:center;width:40%">KETERANGAN</th>
					<th style="text-align:center;width:15%">AKSI</th>
				</thead>
				<?php
					$no=1;
					if(!empty($offset)){
						 $no = ($offset+1);
					}
					foreach( $kat as $row){
					?>
					
					<tr>
					   <td><?php echo $no;?></td>
					   <td><?php echo $row->NAMA_KTGR;?></td>
					   <td><?php echo $row->STATUS;?></td>
					   <td><?php echo $row->KETERANGAN;?></td>
					   <td>1</td>
						</tr>
					<?php
						$no++;
					}
				?>
				
			</table>
		</div>
		<p>
			<?php
				echo $halaman;
				
				?></p>
				<p>
				<?php
				echo "Total Data : ".$jumlahKat;
			?>
			</p>