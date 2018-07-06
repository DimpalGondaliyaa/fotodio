
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Creative Morphing Menu Demo</title>
<style class="cp-pen-styles">
* {
  margin: 0;
  padding: 0;
}

a {
  color: #333;
  text-decoration: none;
}

html {
  width: 100%;
  height: 100%;
}

body {

  width: 100%;
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  color: #fff;
}

h1 {
  width: 100%;
  text-align: center;
  padding: 40px 0;
}

.open {
  position: fixed;
  top: 20px;
  right: 40px;
  width: 50px;
  height: 50px;
  display: block;
  cursor: pointer;
  margin-right: 90%;
  transition: opacity 0.2s linear;
}

.open:hover { opacity: 0.8; }

.open span {
  display: block;
  float: left;
  clear: both;
  height: 4px;
  width: 40px;
  border-radius: 40px;
  background-color: #00bcd4;
  position: absolute;
  right: 3px;
  top: 3px;
  overflow: hidden;
  transition: all 0.4s ease;
}

.open span:nth-child(1) {
  margin-top: 10px;
  z-index: 9;
}

.open span:nth-child(2) { margin-top: 25px; }

.open span:nth-child(3) { margin-top: 40px; }

.sub-menu {
  transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  height: 0;
  width: 0;
  right: 0;
  top: 0;
  position: absolute;
  border-radius: 50%;
  z-index: 18;
  overflow: hidden;
}

.sub-menu li {
  display: block;
  float: right;
  clear: both;
  height: auto;
  margin-right: -160px;
  transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.sub-menu li:first-child { margin-top: 180px; }

.sub-menu li:nth-child(1) { -webkit-transition-delay: 0.05s; }

.sub-menu li:nth-child(2) { -webkit-transition-delay: 0.10s; }

.sub-menu li:nth-child(3) { -webkit-transition-delay: 0.15s; }

.sub-menu li:nth-child(4) { -webkit-transition-delay: 0.20s; }

.sub-menu li:nth-child(5) { -webkit-transition-delay: 0.25s; }

.sub-menu li a {
  color: #fff;
  font-family: 'Lato', Arial, Helvetica, sans-serif;
  font-size: 16px;
  width: 100%;
  display: block;
  float: left;
  line-height: 40px;
}

.oppenned .sub-menu {
  opacity: 1;
  height: auto;
  width: 400px;
}

.oppenned span:nth-child(2) { overflow: visible; }

.oppenned span:nth-child(1),
.oppenned span:nth-child(3) {
  z-index: 100;
  transform: rotate(50deg);
}

.oppenned span:nth-child(1) { transform: rotate(45deg) translateY(12px) translateX(12px); }

.oppenned span:nth-child(2) {
  height: 450px;
  width: 450px;
  right: -160px;
  top: -160px;
  border-radius: 50%;
  background-color: rgba(38, 84, 133, 0.54);
}

.oppenned span:nth-child(3) { transform: rotate(-45deg) translateY(-10px) translateX(10px); }

.oppenned li { margin-right: 168px; }
</style>
</head>

<body>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="open"> <span class="cls"></span><span>
  <ul class="sub-menu ">
    <li> <a href="<?php echo site_url('My_profile'); ?>">My Profile</a> </li>
    <li> <a href="<?php echo site_url('Change_password'); ?>">Chnage Password</a> </li>
    <li> <a href="<?php echo site_url('Websites'); ?>">Websites</a> </li>
    <li> <a href="<?php echo site_url('Stats'); ?>">Stats</a> </li>
    <li> <a href="<?php echo site_url('Balance'); ?>">Balance</a> </li>
    <li> <a href="<?php echo site_url('Logout'); ?>">Logout</a> </li>
  </ul>
  </span> <span class="cls"></span> </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$(document).ready(function() {
    $(document).delegate('.open', 'click', function(event){
      $(this).addClass('oppenned');
      event.stopPropagation();
    })
    $(document).delegate('body', 'click', function(event) {
      $('.open').removeClass('oppenned');
    })
    $(document).delegate('.cls', 'click', function(event){
      $('.open').removeClass('oppenned');
      event.stopPropagation();
    });
  });
</script>
</body>
</html>
