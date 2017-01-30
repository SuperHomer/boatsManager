<?php
include("./global/up.php");

if (empty($_SESSION['username']))
{
  header('Location: login.php');
  exit();
}

$boats = readBoats();

$error = '';

$idBoat = isset($_POST['idBoat']) ? $_POST['idBoat'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
$createdDate = isset($_POST['createdDate']) ? $_POST['createdDate'] : '';
$owner = isset($_POST['owner']) ? $_POST['owner'] : '';

if (isset($_POST['add']))
{
  $success = '';
  $error = '';

  if (!is_numeric($weight)) {
    $error .= "-The weight has to bee a number<br />";
  }

  if (!validateDate($createdDate)) {
    $error .= "-The date format for the created date isn't valid<br />";
  }

  if (empty($error))
  {
    $boat['name'] = $name;
    $boat['description'] = $description;
    $boat['weight'] = $weight;
    $boat['createdDate'] = $createdDate;
    $boat['owner'] = $owner;

    $result = addBoat($boat);
    if (!$result)
    {
      $error .= $result."<br />";
    }
    else {
      $_SESSION['success'] = "The boat has been correctly added<br />";
      header('Location: index.php');
      exit();
    }
  }

}


if (isset($_POST['update']))
{
  $success = '';
  $error = '';

  if (!is_numeric($weight)) {
    $error .= "-The weight has to bee a number<br />";
  }

  if (!validateDate($createdDate)) {
    $error .= "-The date format for the created date isn't valid<br />";
  }

  if (empty($error))
  {
    $boat['idBoat'] = $idBoat;
    $boat['name'] = $name;
    $boat['description'] = $description;
    $boat['weight'] = $weight;
    $boat['createdDate'] = $createdDate;
    $boat['owner'] = $owner;

    $result = updateBoat($boat);
    if (!$result)
    {
      $error .= "Oups an error has occured<br />";
    }
    else {
      $_SESSION['success'] = "The boat has been correctly updated<br />";
      header('Location: index.php');
      exit();
    }
  }

}

if (isset($_POST['delete']))
{
    $success = '';
    deleteBoat($idBoat);
    $_SESSION['success'] = "The boat has been correctly deleted<br />";
}

?>

<div class="row" style="margin-top: 3%;">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <h4>
        Welcome <?php echo $_SESSION['username']; ?> !
      </h4>
    </div>
  </div>
</div>
<div class="row" style="margin-top: 2%;">
  <div class="container">
    <div class="col-md-8 col-md-offset-2" style="background-color: white;">
      <h2>Boats</h2>
      <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
        Add a Boat
      </button></center>
      <?php
        if (!empty($error)) {
          echo '<div class="alert bg-danger" role="alert" style="margin-top:2%">';
          echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ';
          echo "Error(s): <br>";
          echo $error."<br>";
          echo '</div>';
        }
        if (!empty($_SESSION['success'])) {
          echo '<div class="alert bg-success" role="alert" style="margin-top:2%">';
          echo '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ';
          echo $_SESSION['success'];
          echo '</div>';
          $_SESSION['success'] = '';
        }
      ?>
      <table class="table table-bordered" style="margin-top: 20px;">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Weight</th>
          <th>Created date</th>
          <th>Owner</th>
          <th>Action</th>
        </tr>
        <?php
          foreach ($boats as $boat) {
        ?>
        <tr>
          <td><?php echo $boat['idBoat']; ?></td>
          <td><?php echo $boat['name']; ?></td>
          <td><?php echo $boat['description']; ?></td>
          <td><?php echo $boat['weight']; ?></td>
          <td><?php echo $boat['createdDate']; ?></td>
          <td><?php echo $boat['owner']; ?></td>
          <td>
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#<?php echo 'm'.$boat['idBoat']; ?>">
              Modify
            </button>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo 'd'.$boat['idBoat']; ?>">
              Delete
            </button>
          </td>
        </tr>
        <?php
          include('modifyModal.php');
          include('deleteModal.php');
          } // end foreach
          include('addModal.php');
        ?>
      </table>
    </div>
  </div>
</div>

<?php include("./global/down.php") ?>
