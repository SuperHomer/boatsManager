<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form role="form" action="" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modify boat</h4>
      </div>
      <div class="modal-body">
          <fieldset>
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" value="" id="name" name="name" type="text" value="<?php echo $name ?>" required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input class="form-control" value="" id="description" name="description" type="text" value="<?php echo $description ?>" required>
            </div>
            <div class="form-group">
              <label for="weight">Weight</label>
              <input class="form-control" value="" id="weight" name="weight" type="text" value="<?php echo $weight ?>" required>
            </div>
            <div class="form-group">
              <label for="createdDate">Created date (Format: yyyy-mm-dd)</label>
              <input class="form-control" value="" id="createdDate" name="createdDate" type="date" value="<?php echo $createdDate ?>" required>
            </div>
            <div class="form-group">
              <label for="owner">Owner</label>
              <input class="form-control" value="" id="owner" name="owner" type="text" value="<?php echo $owner ?>" required>
            </div>
          </fieldset>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add" class="btn btn-primary btn-md">Add</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
