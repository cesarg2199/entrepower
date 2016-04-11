<!DOCTYPE html>
<html lang="en">
<head>
  <title>EntrePOWER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/entrepower.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
</head>
<body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <!-- <a class="navbar-brand" href="#">EntrePOWER</a> -->
      <a class="navbar-brand" href="<?php echo base_url('power/index');?>"><img src="<?php echo base_url('assets/img/logo1.jpg');?>" alt="EntrePOWER"></a>
    </div>
    <ul class="nav navbar-nav navbar-left">
      <li><a href="<?php echo base_url('power/index');?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EntrePOWER<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">POWER Training</a></li>
          <li><a href="#">Entre Ciriculum</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url('power/about');?>">About Us</a></li>
      <li><a href="<?php echo base_url('power/contact');?>">Contact Us</a></li>
      <li><a href="<?php echo base_url('power/alumni');?>">Alumni</a></li>
      <li><a href="<?php echo base_url('power/jobEmployment');?>">Job Employment</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('power/about');?>">Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">