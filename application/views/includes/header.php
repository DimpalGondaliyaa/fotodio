<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>CodeIgniter - <?php echo $pageTitle; ?></title>
    <!-- CSS-->
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/fonts/line-icons.css">



<!-- <link rel="stylesheet" type="text/css" href="html/assets/css/color-switcher.css">
 -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/nivo-lightbox.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/main.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/assets/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header id="header-wrap">

<nav class="navbar navbar-expand-lg">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="<?php echo site_url('Home'); ?>" class="navbar-brand"><img src="<?php echo base_url(); ?>html/image/logo2.png" alt=""></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="<?php echo site_url('Home'); ?>">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="category.html">
View Cart
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="<?php echo site_url('BuyAds'); ?>" aria-haspopup="true" aria-expanded="false">
Buy Ads (RON)
</a>
<!-- <div class="dropdown-menu">
<a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
<a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
<a class="dropdown-item" href="ads-details.html">Listing Detail</a>
</div> -->
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pages
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="about.html">About Us</a>
<a class="dropdown-item" href="services.html">Services</a>
<a class="dropdown-item" href="ads-details.html">Ads Details</a>
<a class="dropdown-item" href="post-ads.html">Ads Post</a>
<a class="dropdown-item" href="pricing.html">Packages</a>
<a class="dropdown-item" href="testimonial.html">Testimonial</a>
<a class="dropdown-item" href="faq.html">FAQ</a>
<a class="dropdown-item" href="404.html">404</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Blog
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
<a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
<a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
<a class="dropdown-item" href="single-post.html">Blog Details</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo site_url('Contact'); ?>">
Contact
</a>
</li>
</ul>
<ul class="sign-in">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="font1 fa fa-user"></i> My Account</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="<?php echo site_url('Home'); ?>"><i class="font1 fa fa-home"></i> Home</a>
<!-- <a class="dropdown-item" href="<?php echo site_url('Change_password'); ?>"><i class="font1 fa fa-key"></i>Change Password</a> -->
<a class="dropdown-item" href="<?php echo site_url('Login'); ?>"><i class="font1 fa fa-user"></i>My Profile</a>
<!-- <a class="dropdown-item" href="<?php echo site_url('Websites'); ?>"><i class="font1 fa fa-globe"></i>Websites</a>
<a class="dropdown-item" href="<?php echo site_url('Stats'); ?>"><i class="font1 fa fa-list-alt"></i>Stats</a>
<a class="dropdown-item" href="<?php echo site_url('Balance'); ?>"><i class="font1 fa fa-usd"></i>Balance</a> -->
<a class="dropdown-item" href="<?php echo site_url('Login'); ?>"><i class="font1 fa fa-sign-in"></i> Log In</a>
<a class="dropdown-item" href="<?php echo base_url('Register') ?>"><i class="font1 fa fa-registered"></i> Signup</a>
<a class="dropdown-item" href="<?php echo site_url('Forgetpassword'); ?>"><i class="font1 fa fa-undo"></i> Forgot Password</a>
<!-- <a class="dropdown-item" href="<?php echo site_url('Logout'); ?>"><i class="font1 fa fa-power-off"></i>Log out</a> -->
<a class="dropdown-item" href="account-close.html"><i class="font1 fa fa-window-close"></i>Account close</a>
</div>
</li>
</ul>
<a class="tg-btn" href="<?php echo site_url('Sell_ads'); ?>">
<i class="font1  fa fa-buysellads"></i> Sell Ads
</a>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="active" href="index.html">Home</a>
</li>
<li>
<a href="category.html">Categories</a>
</li>
<li>
<a href="#">
Listings
</a>
<ul class="dropdown">
<li><a href="adlistinggrid.html">Ad Grid</a></li>
<li><a href="adlistinglist.html">Ad Listing</a></li>
<li><a href="ads-details.html">Listing Detail</a></li>
</ul>
</li>
<li>
<a href="#">Pages</a>
<ul class="dropdown">
<li><a href="about.html">About Us</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="ads-details.html">Ads Details</a></li>
<li><a href="post-ads.html">Ads Post</a></li>
<li><a href="pricing.html">Packages</a></li>
<li><a href="testimonial.html">Testimonial</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="404.html">404</a></li>
</ul>
</li>
<li>
<a href="#">Blog</a>
<ul class="dropdown">
<li><a href="blog.html">Blog - Right Sidebar</a></li>
<li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
<li><a href="blog-grid-full-width.html"> Blog full width </a></li>
<li><a href="single-post.html">Blog Details</a></li>
</ul>
</li>
<li>
<a href="contact.html">Contact Us</a>
</li>
<li>
<a>My Account</a>
<ul class="dropdown">
<li><a href="account-profile-setting.html"><i class="font1 lni-home"></i> Account Home</a></li>
<li><a href="account-myads.html"><i class="font1 lni-wallet"></i> My Ads</a></li>
<li><a href="account-favourite-ads.html"><i class="font1 lni-heart"></i> Favourite ads</a></li>
<li><a href="account-archived-ads.html"><i class="font1 fa fa-folder"></i> Archived</a></li>
<li><a href="login.html"><i class="font1 lni-lock"></i> Log In</a></li>
<li><a href="signup.html"><i class="font1 fa fa-user"></i> Signup</a></li>
<li><a href="forgot-password.html"><i class="font1 lni-reload"></i> Forgot Password</a></li>
<li><a href="account-close.html"><i class="font1 lni-close"></i>Account close</a></li>
</ul>
</li>
</ul>

</nav>
<style type="text/css">
    .font1
    {
        padding-top: 5px;
    }
</style>