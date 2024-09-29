<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Covido</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets1/Main_covid/css/bootstrap.min.css');?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url('assets1/Main_covid/css/style.css');?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('assets1/Main_covid/css/responsive.css');?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('assets1/Main_covid/images/fevicon.png');?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="<?php echo base_url('assets1/Main_covid/css/owl.carousel.min.css');?>"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>

  <!-- body -->
    <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url('assets1/Main_covid/images/loading.gif');?>" alt="#"/></div>
      </div>

      <!-- header -->
         <header class="header-area">
    
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.html"></a>
                     </div>
                  </div>
                  <div class="col-lg-12 offset-lg-1 col-md-4 col-sm-12">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a class="active" href="<?php echo site_url('Main/Main_page_controller/');?>">Home</a></li>
                              <li><a href="<?php echo site_url('Main/Home_about_controller/');?>">About Covid19</a></li>
                              <li><a href="<?php echo site_url('Main/Take_action_controller/');?>">take action</a></li>
                              <li><a href="<?php echo site_url('Main/Main_page_controller/');?>" class="logo_midle">covid19</a></li>
                              <li><a href="<?php echo site_url('Main/News_controller/');?>">News</a></li>
                              <li><a href="<?php echo site_url('Main/index/');?>">covid-19 updates</a></li>
                               
                              <li><a href="<?php echo site_url('Main/Contact_controller/');?>">Contact us</a></li>

                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- end header -->
