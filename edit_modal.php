<div class="modal fade" id="edit<?php echo $urow['harvestID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <?php
		$n=mysqli_query($conn,"select * from `harvest` where harvestID='".$urow['harvestID']."'");
		$nrow=mysqli_fetch_array($n);
	?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <center>
                        <h3 class="text-success modal-title">Update Harvest</h3></center>
                </div>
                <form class="form-inline">
                    <div class="modal-body">
                        Harvest (in Kilos):
                        <input type="text" value="<?php echo $nrow['amount']; ?>" id="uamount<?php echo $urow['harvestID']; ?>" class="form-control"> selling price: (Rs. per Kilo)
                        <input type="text" value="<?php echo $nrow['price']; ?>" id="uprice<?php echo $urow['harvestID']; ?>" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> |
                        <button type="button" class="updateHarvest btn btn-success" value="<?php echo $urow['harvestID']; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                    </div>
                </form>
            </div>
        </div>
</div>