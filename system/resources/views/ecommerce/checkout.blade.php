<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Tugas-3-DPW-2|CHECKOUT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Suity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{url('public')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{url('public')}}/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{url('public')}}/js/jquery-1.11.1.min.js"></script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close2').on('click', function(c){
		$('.message2').fadeOut('slow', function(c){
	  		$('.message2').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- start navbar -->
@include('ecommerce.section.navbar')
<!-- end navbar -->
<div class="about_top">
  <div class="container">
		<div class="col-md-3">
			<ul class="menu1">
				<li class="item1"><a href="#" class="">What To Buy ?<img class="arrow-img" src="{{url('public')}}/images/arrow.png" alt=""/> </a>
					<ul class="cute" style="display: none; overflow: hidden;">
						<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
						<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
						<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
					</ul>
		         </li>
			 </ul>
			<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu1_ul = $('.menu1> li > ul'),
			           menu1_a  = $('.menu1 > li > a');
			    menu1_ul.hide();
			    menu1_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu1_a.removeClass('active');
			            menu1_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
		<div class="box1">
			<ul class="box1_list">
				<li><a href="#">Jeans</a></li>
				<li><a href="#">Hoodies</a></li>
				<li><a href="#">Watches</a></li>
				<li><a href="#">Suits</a></li>
				<li><a href="#">Ties</a></li>
				<li><a href="#">Shirts</a></li>
				<li><a href="#">T-Shirts</a></li>
				<li><a href="#">Underwear</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">Caps & Hats</a></li>
			</ul>
		</div>
		<ul class="box2_list">
				<li><a href="#">New Arrivals</a></li>
				<li><a href="#">Sales</a></li>
				<li><a href="#">Collection '15</a></li>
				<li><a href="#">Mystery</a></li>
				<li><a href="#">Story Behind</a></li>
				<li><a href="#">About US</a></li>
				<li><a href="#">Contacts</a></li>
		 </ul>
		 <ul class="box3_list">
				<li><a href="#">New Arrivals</a></li>
				<li><a href="#">Sales</a></li>
				<li><a href="#">Collection '15</a></li>
				<li><a href="#">Mystery</a></li>
				<li><a href="#">Story Behind</a></li>
				<li><a href="#">About US</a></li>
				<li><a href="#">Contacts</a></li>
		 </ul>
		</div>
		<div class="col-md-9 content_right">
		   <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                        Checkout
                    </li>
               </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
		   </div>
		   <h1 class="title1">Shopping cart is empty</h1>
		   <p class="cart">You have no items in your shopping cart.<br>Click<a href="{{url('home')}}"> here</a> to continue shopping</p>
         </div>
	    <div class="clearfix"> </div>   	
    </div>   
</div>
<!-- start footer -->
@include('ecommerce.section.footer')
<!-- end footer -->
</body>
</html>		