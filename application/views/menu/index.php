<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$activeLink = (isset($activeLink)) ? $activeLink :  "";?>

<nav class="navbar navbar-expand-md navbar-light  bg-light fixed-top">
  <a class="navbar-brand" href="<?php echo base_url();?>users"><img src="<?php echo base_url() ?>assets/images/examples/logo.png" alt="" style="width: 150px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse header-menu" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item <?php echo ($activeLink=='home'?'active':'');?>">
        <a class="nav-link" href="<?php echo base_url();?>users">Home</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='category'?'active':'');?>">
        <a class="nav-link" href="<?php echo base_url();?>category">Category</a>
      </li>
      <li class="nav-item <?php echo ($activeLink=='material'?'active':'');?>">
        <a class="nav-link" href="<?php echo base_url();?>material">Material</a>
      </li>
      
      <div class="navbar dropdown" >
        <li class="dropdown-toggle  <?php echo ($activeLink=='others'?'active':'');?>" data-toggle="dropdown">
          Others
          <li class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url();?>departments">Department</a>
            <a class="dropdown-item" href="<?php echo base_url();?>brand">Brand</a>
            <a class="dropdown-item" href="<?php echo base_url();?>location">Location</a>
            <a class="dropdown-item" href="<?php echo base_url();?>model">Model</a>
            <a class="dropdown-item" href="<?php echo base_url();?>owner">Owner</a>
          </li>
        </li>
      </div>
      <!-- <li class="nav-item <?php //echo ($activeLink=='users'?'active':'');?>">
        <a class="nav-link" href="<?php //echo base_url();?>users"><i class="mdi mdi-lock"></i>Users</a>
      </li> -->
      <?php if($this->session->loggedIn === TRUE) { ?>
      <div class="navbar-collapse collapse ">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>connection/logout">
              <?php echo $this->session->fullname;?> <i class="mdi mdi-power"></i>
            </a>
          </li>
        </ul>
      </div>
      <?php } ?>
    </ul>
  </div>
</nav>
<br>
<!-- <br> -->