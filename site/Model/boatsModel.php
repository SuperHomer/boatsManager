<?php

function readBoats()
{
     try {
        $pdo = PDO2::getInstance();
        $req = $pdo->prepare("SELECT * FROM boats");
        $req->execute();
        $donnees = $req->fetchAll();
        return $donnees;
    }
    catch (Exception $e)
        {die($e->getMessage());}
}

function deleteBoat($idBoat) {
    try {
      $idBoat = (int)$idBoat;
      $pdo = PDO2::getInstance();
      $req = $pdo->prepare("DELETE FROM boats WHERE idBoat = :idBoat");
      $req->bindValue(":idBoat", $idBoat);

      $req->execute();
    } catch (Exception $e) {
      {die($e->getMessage());}
    }

}

function addBoat($boat)
{
  try {
     $pdo = PDO2::getInstance();

     $sql = "INSERT INTO boats(name, description, weight, createdDate, owner)
     VALUES (:name, :description, :weight, :createdDate, :owner)";

     $req = $pdo->prepare($sql);

     $req->bindValue(":name", $boat['name']);
     $req->bindValue(":description", $boat['description']);
     $req->bindValue(":weight", $boat['weight']);
     $req->bindValue(":createdDate", $boat['createdDate']);
     $req->bindValue(":owner", $boat['owner']);

     $req->execute();

     return true;
   }
   catch (Exception $e)
     {die($e->getMessage()); return false;}
}


function updateBoat($boat)
{
  try {
     $pdo = PDO2::getInstance();

     $sql = "UPDATE boats SET name = :name, description = :description,
     weight = :weight, createdDate = :createdDate, owner = :owner
     WHERE idBoat = :idBoat";

     $req = $pdo->prepare($sql);

     $req->bindValue(":idBoat", $boat['idBoat']);
     $req->bindValue(":name", $boat['name']);
     $req->bindValue(":description", $boat['description']);
     $req->bindValue(":weight", $boat['weight']);
     $req->bindValue(":createdDate", $boat['createdDate']);
     $req->bindValue(":owner", $boat['owner']);

     $req->execute();

     return true;
   }
   catch (Exception $e)
     {die($e->getMessage()); return false;}
}

?>
