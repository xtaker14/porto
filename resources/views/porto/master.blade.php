<!DOCTYPE html>
<html>
<head>
	<title>@yield('title_p')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/left_menu/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/glitch_text/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/porto/home.css') }}">
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> --}}
  
</head>
<body>

	<div class="parent-left-menu">
		<a class="logo" rel="index" href="https://jacekjeznach.com"> 
			<span style="color:#08fdd8; display: block; font-size: 22px; text-align: center;">B</span>	
			<span style="color:white; display: block; font-size: 18px; text-align: center;">
				A.H
			</span>	
		</a>
		<nav class="nav_bar">
			<a rel="index" href="https://jacekjeznach.com/" class="home-link active">
				<i class="fa fa-home"></i>
				<div class="overlay">
					<div class="text">HOME</div>
				</div>
			</a> 
			<a rel="about" href="https://jacekjeznach.com/about/" class="">
				<i class="fa fa-user-o"></i>
				<div class="overlay">
					<div class="text">ABOUT</div>
				</div>
			</a> 
			<a rel="skills" href="https://jacekjeznach.com/skills/" class="">
				<i class="fa fa-gears"></i>
				<div class="overlay">
					<div class="text">SKILLS</div>
				</div>
			</a> 
			<a rel="gallery" href="https://jacekjeznach.com/portfolio/" class="">
				<i class="fa fa-eye"></i>
				<div class="overlay">
					<div class="text">WORK</div>
				</div>
			</a> 
			<a rel="contact" href="https://jacekjeznach.com/contact/" class="">
				<i class="fa fa-envelope-o"></i>
				<div class="overlay">
					<div class="text">EMAIL</div>
				</div>
			</a>
		</nav>
		<ul>
			<li>
				<a href="#" target="_blank">
					<i class="fa fa-whatsapp"></i>
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="#" target="_blank">
					<i class="fa fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>

	<div class="parent-right-content"> 
		<div id="particles-js"></div>

		<div class="content_body">
			<span class="header_span">
				Hi,<br>
				I'm <span>B</span>akri <span>A</span>.<span>H</span>,
				<br>Web Developer.
			</span><br>
			<span class="footer_span">
				Back End Developer / React.JS / Laravel
			</span>
			<button class="content_btn">
				CONTACT ME
			</button>
		</div>
		<div class="header_logo">
			<h1 class="glitched">
				<!-- cyan #08FDD8  -->
				<!-- red #FC0551  -->
				<span style="color:#08FDD8;">B</span>
				<span style="color:#FC0551;">.</span>
				<span style="color:white;">A</span>
				<span style="color:white;">.</span>
				<span style="color:white;">H</span> 
			</h1> 
		</div>
	</div>


	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/left_menu/script.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('/js/glitch_text/script.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('/js/particle/script.js') }}"></script> 	
	<script type="text/javascript" src="{{ asset('/js/porto/home.js') }}"></script> 	
</body>
</html>