<div class="modal fade" id="<?php echo 'd'.$boat['idBoat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete boat: <?php echo $boat['name']; ?></h4>
      </div>
      <div class="modal-body">
          <p>Are you sure you want to delete the boat: <b><?php echo $boat['name']; ?></b> ?</p>
      </div>
      <div class="modal-footer">
        <form role="form" action="" method="post">
          <input class="form-control" id="idBoat" name="idBoat" type="hidden" value="<?php echo $boat['idBoat']; ?>" required>
          <button type="submit" name="delete" class="btn btn-danger btn-md">Delete</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
