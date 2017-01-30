<?php

session_start();
require_once("./global/pdo2.php");
require_once("./global/config.php");
require_once("./global/functions.php");
require_once("./Model/userModel.php");
require_once("./Model/boatsModel.php");

?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Boats Management</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap-3.3.6-dist/css/signin.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 50px;
      }
      .starter-template {
        padding: 40px 15px;
        text-align: center;
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Boats Managment</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php
            if (!empty($_SESSION['username']))
            {
              echo '<li><a href="logout.php">Logout</a></li>';
            }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
