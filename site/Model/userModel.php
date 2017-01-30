<?php
function connection($username, $password)
{
  $connect = false;
  try
  {
    $pdo = PDO2::getInstance();
    $req = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $req->bindValue(":username", $username);
    $req->bindValue(":password", sha1(PASS_SALT.$password));
    $req->execute();
    $data = $req->fetch();
    if ($data)
    {
      $_SESSION['username'] = htmlspecialchars($username);
      $_SESSION['fullName'] = htmlspecialchars($data['fullName']);
      $connect = true;
    }
  }
  catch (Exception $e)
    {die($e->getMessage());}//$connect = false;}

  return $connect;
}

function getUserByUsername($username)
{
    try {
        $pdo = PDO2::getInstance();
        $req = $pdo->prepare("SELECT * FROM Users WHERE username = :username");
        $req->execute(array('username' => $username));
        $donnees = $req->fetch();
        //$req->closeCursor();
        return $donnees;
    }
    catch (Exception $e)
        {die($e->getMessage());}
}


function addUser($sign)
{
  try {
     $pdo = PDO2::getInstance();

     if(!empty(getUserByUsername($sign['username']))){
       return false;
     }

     $sql = "INSERT INTO users(fullName, username, password)
     VALUES (:fullName, :username, :password)";

     $req = $pdo->prepare($sql);

     $req->bindValue(":fullName", $sign['fullName']);
     $req->bindValue(":username", $sign['username']);
     $req->bindValue(":password", sha1(PASS_SALT.$sign['password']));

     $req->execute();

     $_SESSION['username'] = htmlspecialchars($sign['username']);
     $_SESSION['fullName'] = htmlspecialchars($sign['fullName']);

     return true;
   }
   catch (Exception $e)
     {die($e->getMessage()); return false;}
}
?>
