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
