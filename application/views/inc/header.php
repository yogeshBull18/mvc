<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Real Estate | Front - Multipurpose Responsive Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="href=/public/front/img/favicon.ico">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php  base_url(); ?>public/front/css/vendor.min.css">
  <link rel="stylesheet" href="<?php  base_url(); ?>public/front/css/bootstrap-icons.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="<?php  base_url(); ?>public/front/css/theme.min.css?v=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light">
     
    
    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="<?php  base_url(); ?>" aria-label="Front">
          <img class="navbar-brand-logo" src="<?php  base_url(); ?>/public/front/img/svg/logo.svg" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="fas fa-bars"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <!-- End Toggler -->
      
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?php  base_url('/'); ?>">Home</a>
            </li>

            <!-- Dropdown -->
            <li class="hs-has-sub-menu nav-item">
              <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem;">
                <a class="dropdown-item " href="<?php  base_url('listing'); ?>">Listing</a> 
              </div>
            </li>
            <!-- End Dropdown -->
          
            <li class="nav-item">
              <a class="nav-link " href="<?php  base_url('contact'); ?>">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php  base_url('login'); ?>">Login</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link " href="<?php  base_url('register'); ?>">Register</a>
            </li>                        
            <li class="nav-item">
              <a class="btn btn-primary btn-transition" href="#">Start selling</a>
            </li>
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->