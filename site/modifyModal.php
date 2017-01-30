<div class="modal fade" id="<?php echo 'm'.$boat['idBoat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form role="form" action="" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modify boat</h4>
      </div>
      <div class="modal-body">
          <fieldset>
            <input class="form-control" id="idBoat" name="idBoat" type="hidden" value="<?php echo $boat['idBoat']; ?>" required>
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" value="<?php echo $boat['name']; ?>" id="name" name="name" type="text" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input class="form-control" value="<?php echo $boat['description']; ?>" id="description" name="description" type="text" required>
            </div>
            <div class="form-group">
              <label for="weight">Weight</label>
              <input class="form-control" value="<?php echo $boat['weight']; ?>" id="weight" name="weight" type="text" required>
            </div>
            <div class="form-group">
              <label for="createdDate">Created date</label>
              <input class="form-control" value="<?php echo $boat['createdDate']; ?>" id="createdDate" name="createdDate" type="date" required>
            </div>
            <div class="form-group">
              <label for="owner">Owner</label>
              <input class="form-control" value="<?php echo $boat['owner']; ?>" id="owner" name="owner" type="text" required>
            </div>
          </fieldset>
      </div>
      <div class="modal-footer">
        <button type="submit" name="update" class="btn btn-warning btn-md">Modify</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
