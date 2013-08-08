<html>
<head>
<title>DevDavid</title>
<?php include '_title.php' ?>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3 david_sidebar">
			<ul class="parallel">
				<?php echo $selectedBg; ?>
				<a href="/"><button class="link"><li class="dfade">#DEVDAVID</li></button></a>
				<!-- <button class="link"><li class="dfade dev_david_link">DEVDAVID</li></button> -->
				<button class="link"><li class="dfade about_me_link">ABOUT.ME</li></button>
				<button class="link"><li class="dfade contact_link">CONTACT</li></button>
			</ul>
		</div>
		<div class="span9">
			<div class="david_main_page">
				<div class="content dfade">
					<h1 class="h_nice bold">DEVDAVID - HTML . CSS . PHP . JS . RoR</h1><br><br>
				</div>	
				<div class="content dfade">
					<h2 class="h_nice">WORKS</h3><br><br>
					<ul>
						<li class="portfolio_list"><a href="http://asiafan.net/" target="_blank"><img class="imgthumb"src="images/asiafan.jpg"> <h3 class="h_nice">Asia Fan</h3> <h3 class="portfolio_list_description"> / Interactive social media site / Ruby on Rails</h3></a></li><br>
						<li class="portfolio_list"><a href="http://fathomless-everglades-6981.herokuapp.com/" target="_blank"><img class="imgthumb"src="images/pinninja.jpg"> <h3 class="h_nice">Pin Ninja</h3> <h3 class="portfolio_list_description"> / Picture sharing site / Ruby on Rails</h3></a></li><br>
						<li class="portfolio_list"><a href="http://devdavid.com/" target="_blank"><img class="imgthumb"src="images/devdavidsnap.jpg"> <h3 class="h_nice">Dev David</h3> <h3 class="portfolio_list_description"> / This site ;) / PHP</h3></a></li>
					</ul>
				</div>
			</div>
			<div class="about_me">
				<div class="content">
					<h1 class="h_nice">ABOUT ME</h1>
				</div>
				<div class="content">
					<ul>
						<li>Profile / David Nguyen</li>
						<li>Location / Oakland, California</li>
						<li>Likes / "I love goldddd" - Goldmember/Austin Powers</li>
					</ul>
				</div>
			</div>
			<div class="contact">
				<div class="content">
					<h1 class="h_nice">CONTACT</h1>
				</div>
				<div class="content">
					<ul>
						<li>Email / <a href="mailto:david.nguyen.email@gmail.com">david.nguyen.email@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<!-- <div><h3 class="bottom h_nice italic dfade">..because web development should be fun..</h3></div> -->
		</div>
	</div>
</div>
</body>
</html>