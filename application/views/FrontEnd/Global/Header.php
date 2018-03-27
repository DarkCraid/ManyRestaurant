<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luxury Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/sources/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/sources/css/Fernanda.css'); ?>">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="col-md-4">
         <a href="#"><center><img src="<?php echo base_url('assets/sources/img/luxury.png'); ?>" class="img-nav" alt="SAO" width="150px" heigh="150px" style="position:relative; top:10px;"></center></a>
              </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url('index.php/Restaurante/Home'); ?>" style="font-size: 12px;">Home</a></li>
      <li><a href="<?php echo base_url('index.php/Restaurante/Menu'); ?>" style="font-size: 12px;">MENU</a></li>
      <li><a href="<?php echo base_url('index.php/Restaurante/Reservation'); ?>" style="font-size: 12px;">RESERVATION</a></li>
      <li><a href="<?= base_url('index.php/Restaurant/Events'); ?>" style="font-size: 12px;">EVENTS</a></li>
      <li><a href="<?php echo base_url('index.php/Restaurante/Recipies'); ?>" style="font-size: 12px;">RECIPE</a></li>
      <li><a href="<?php echo base_url('index.php/Restaurant/Blogs'); ?>" style="font-size: 12px;">BLOG</a></li>
      <li><a href="<?php echo base_url('index.php/Restaurante/ContactUs'); ?>" style="font-size: 12px;">CONTACT</a></li>
    </ul>
  </div>
</nav>
  

