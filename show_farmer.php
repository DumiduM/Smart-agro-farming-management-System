<?php
	include('config.php');
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>FarmerID</th>
				<th>FarmerName</th>
				<th>NIC</th>
				<th>Division</th>
				<th>Mobile</th>
				<th>E-mail</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"select * from `farmer`");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><?php echo $urow['farmerID']; ?></td>
									<td><?php echo $urow['name']; ?></td>
									<td><?php echo $urow['NIC']; ?></td>
									<td><?php echo $urow['agriDiv']; ?></td>
									<td><?php echo $urow['mobile']; ?></td>
									<td><?php echo $urow['email']; ?></td>
									
									<td><button class="btn btn-danger delete" value="<?php echo $urow['farmerID']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									</td>
								</tr>
							<?php
						}
					
					?>
				</tbody>
			</table>
		<?php
	}

?>