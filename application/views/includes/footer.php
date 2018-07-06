	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url();?><?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>

<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="footer-logo"><img src="html/assets/img/logo2.png" alt=""></h3>
<div class="textwidget">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Latest Ads</h3>
<ul class="media-content-list">
<li>
<div class="media-left">
<img class="img-fluid" src="html/assets/img/art/img1.jpg" alt="">
<div class="overlay">
<span class="price">$ 79</span>
 </div>
</div>
<div class="media-body">
<h4 class="post-title"><a href="ads-details.html">Brand New Macbook Pro</a></h4>
<span class="date">12 Jan 2018</span>
</div>
</li>
<li>
<div class="media-left">
<img class="img-fluid" src="html/assets/img/art/img2.jpg" alt="">
<div class="overlay">
<span class="price">$ 49</span>
</div>
</div>
<div class="media-body">
<h4 class="post-title"><a href="ads-details.html">Canon Photography Camera</a></h4>
<span class="date">28 Mar 2018</span>
</div>
</li>
</ul>
</div>
</div>
<!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Help & Support</h3>
<ul class="menu">
<li><a href="#">Live Chat</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Purchase Protection</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
</div> -->
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Subscribe us</h3>
<p class="text-sub">We have over 5 years of experience Our suppoer avalable to help you 24 hours a day, seven days week</p>
<form method="post" id="subscribe-form" name="subscribe-form" class="validate">
<div class="form-group is-empty">
<input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
<button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="fa fa-check-square"></i></button>
<div class="clearfix"></div>
</div>
</form>
<ul class="footer-social">
<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info float-left">
<p>All copyrights reserved &copy; 2018 - Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
</div>
<div class="float-right">
<ul class="bottom-card">
<li>
<a href="#"><img src="html/assets/img/footer/card1.jpg" alt="card"></a>
</li>
<li>
<a href="#"><img src="html/assets/img/footer/card2.jpg" alt="card"></a>
</li>
<li>
<a href="#"><img src="html/assets/img/footer/card3.jpg" alt="card"></a>
</li>
<li>
<a href="#"><img src="html/assets/img/footer/card4.jpg" alt="card"></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>




<script src="<?php echo base_url();?>html/assets/js/jquery-min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/bootstrap.min.js"></script>
<!-- <script src="<?php echo base_url();?>html/assets/js/color-switcher.js"></script> -->
<script src="<?php echo base_url();?>html/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/wow.js"></script>
<script src="<?php echo base_url();?>html/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/nivo-lightbox.js"></script>
<script src="<?php echo base_url();?>html/assets/js/main.js"></script>
<script src="<?php echo base_url();?>html/assets/js/form-validator.min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/contact-form-script.min.js"></script>
<script src="<?php echo base_url();?>html/assets/js/summernote.js"></script>
</body>
</html>
