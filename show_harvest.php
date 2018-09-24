<?php
session_start();
	include('config.php');
	$farmerID             = $_SESSION['farmerID'];
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>Start Date</th>
				<th>Variety Name</th>
				<th>Harvest</th>
				<th>Price</th>
				<th>Action</th>
				
			</thead>
				<tbody>
					<?php
						$qharvest=mysqli_query($conn,"select amount,harvest.price,harvestID,dateSc,varietyName from `harvest`,`farmercrop`,`variety` where farmerID like '$farmerID' and farmercrop.scheduleID = harvest.scheduleID and farmercrop.verityID = variety.varietyID" );
						while($urow=mysqli_fetch_array($qharvest)){
							?>
								<tr>
									<td><?php echo $urow['dateSc'];?></td>
									<td><?php echo $urow['varietyName'];?></td>
									<td><?php echo $urow['amount'];?></td>
									<td><?php echo $urow['price'];?></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['harvestID']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['harvestID']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
										<?php include('edit_modal.php'); ?>
					
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