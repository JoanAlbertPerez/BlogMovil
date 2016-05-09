<!--
<html>
<head>
<title>CodeIgniter Tutorial</title>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
<div id="body">
<header id="menu">
<nav>
<ul id="list">
<li class="li-list title"><h2 class="li-content"><?php echo $title; ?><h2 ></li>
<li class="li-list"><a class="a-list li-content" href="<?php echo site_url("news"); ?>">Inicio</a></li>
<li class="li-list"><a class="a-list li-content" href="<?php echo site_url("news/create"); ?>">Añadir entrada</a></li>
</ul>
</nav>
</header>
-->

<html>
<head>
  <title>CodeIgniter Tutorial</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>
  <!-- My CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="body">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url("news"); ?>">Kitmaker Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url("news"); ?>">Inicio</a></li>
            <li><a href="<?php echo site_url("news/create"); ?>">Añadir entrada</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php
            if ($this->session->userdata('logueado')) {
              echo site_url("users/logueado");
            }else {
              echo site_url("users/iniciar_sesion");
            }
             ?>">
             <span class="glyphicon glyphicon-user"></span> Panel de administracion</a></li>
          </ul>
        </div>
      </div>

    </nav>
