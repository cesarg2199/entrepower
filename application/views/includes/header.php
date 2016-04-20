<!DOCTYPE html>
<html lang="en">
<head>
  <title>EntrePOWER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/entrepower.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific.css');?>">
</head>
<body>
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('power/index');?>"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="EntrePOWER"></a>
    </div>
    <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('power/index');?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EntrePOWER<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a onclick="checkLoginPower()">POWER Training</a></li>
          <li><a onclick="checkLoginEntre()">Entre Ciriculum</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url('power/about');?>">About Us</a></li>
      <li><a href="<?php echo base_url('power/contact');?>">Contact Us</a></li>
      <li><a href="<?php echo base_url('power/alumni');?>">Alumni</a></li>
      <li><a href="<?php echo base_url('power/jobEmployment');?>">Job Employment</a></li>
    </ul>
    </div>
  </div>
</nav> <!-- End of navbar -->
  
<div class="container">

<!-- Login modal -->
<div class="modal fade" id="loginModalPower" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="lineModalLabel">Login for Premium Content</h3>
      </div>
      <div class="modal-body">
      <!-- content goes here -->
        <?php echo form_open('Power/loginPower'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn entrePOWERColor ">Login</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="loginModalEntre" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="lineModalLabel">Login for Premium Content</h3>
      </div>
      <div class="modal-body">
      <!-- content goes here -->
        <?php echo form_open('Power/loginEntre');?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn entrePOWERColor">Login</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>