<?php
include("./global/up.php");

$connection = false;

if (isset($_POST['login']))
{
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (connection($username, $password))
    {
        header('Location: index.php');
        exit();
    }
    else
    {
      $connection = true;
    }
}

$error = '';

$usernameSign = isset($_POST['usernameSign']) ? $_POST['usernameSign'] : '';
$passwordSign = isset($_POST['passwordSign']) ? $_POST['passwordSign'] : '';
$passwordSign2 = isset($_POST['passwordSign2']) ? $_POST['passwordSign2'] : '';
$fullNameSign = isset($_POST['fullNameSign']) ? $_POST['fullNameSign'] : '';
$error = '';

if (isset($_POST['signin']))
{

  if ($passwordSign != $passwordSign2)
    $error .= "The passwords aren't identical<br />";


  if (empty($error))
  {
    $user['username'] = $usernameSign;
    $user['fullName'] = $fullNameSign;
    $user['password'] = $passwordSign;

    $result = addUser($user);

    if ($result)
    {
      header('Location: index.php');
      exit();
    }
    else
    {
      $error .= "The username is already in use<br />";
    }
  }

}
?>

<!--login-->
<div class="row" style="margin-top: 5%;">
	<div class="col-md-3 col-md-offset-2">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Log in</div>
			<div class="panel-body">
				<form role="form" action="" method="post">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
						</div>
						<button type="submit" name="login" class="btn btn-primary btn-md" id="btn-todo">Log in</button>
					</fieldset>
				</form>
			</div>
		</div>
    <?php
      if (empty($_SESSION['username'])) {
          if ($connection) {
            echo '<div class="alert bg-danger" role="alert">';
            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ';
            echo "The username or the password is wrong";
            echo '</div>';
          }
      }
    ?>
	</div>
  <div class="col-md-2" style="margin-top:5%;">
    <center><p>OR</p></center>
  </div>
  <!--signin-->
  <div class="col-md-3">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">Sign in</div>
      <div class="panel-body">
        <form role="form" action="" method="post">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="Username" name="usernameSign" type="text" autofocus="" value="<?php echo $usernameSign ?>" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Full name" name="fullNameSign" type="text" autofocus="" value="<?php echo $fullNameSign ?>" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="passwordSign" type="password" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password confirmation" name="passwordSign2" type="password" value="" required>
            </div>
            <button type="submit" name="signin" class="btn btn-primary btn-md">Sign in</button>
          </fieldset>
        </form>
      </div>
    </div>
    <?php
      if (!empty($error)) {
        echo '<div class="alert bg-danger" role="alert">';
        echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ';
        echo "Error(s): <br>";
        echo $error;
        echo '</div>';
      }
    ?>
  </div>

</div><!-- /.row -->

<?php include("./global/down.php") ?>
