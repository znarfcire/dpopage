<!-- 
Homepage
coded by: Delta Pi Omega Web team
date:
last update:


New updates and fixes here
-->
<?php
	include_once('inc/query/dbcon.php');
	include_once('inc/query/countdown.php'); 
	include_once('inc/query/actvtyq.php');
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="30">
		<title>Delta Pi Omega Official Website</title>
	<!-- meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="deltapiomega" content="Delta Pi Omega official website, members, articles, about">
   		<meta name="ryanmationg" content="dolphins developers">
    <!-- CSS links -->
		<link rel="stylesheet" type="text/css" href="http://localhost/dpo/res/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/dpo/res/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/dpo/res/css/default.css">
	</head>
	<body>
	<div>
		<header class="navbar-default" role="banner" id="header-holder">
			<div id="texture">
				<div class="container">
					<nav class="navigation">
				  		<div class="container-fluid">
				    		<div class="navbar-header">
				      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				       				<span class="sr-only">Toggle navigation</span>
				        			<span class="icon-bar"></span>
				        			<span class="icon-bar"></span>
				        			<span class="icon-bar"></span>
				      			</button>
				     			<a class="navbar-brand" href="">
				      				<strong id="brand-name">&#916 &#928 &#937 - DELTA PI OMEGA</strong>
				      			</a>
				    			</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      								<ul class="nav navbar-nav">
       									<li class=""><a href="#activities-section" id="projects">ACTIVITIES<span class="sr-only">(current)</span></a></li>
        								<li><a href="#about-us" id="about">ABOUT US</a></li>
        								<li><a href="#contact-details" id="info">CONTACT US</a></li>
										<li>
										<!-- this is the login modal -->
											<a data-toggle="modal" data-target="#myModal">LOGIN</a>
										</li>
            							</ul>
          							</ul>
          							<form class="navbar-form navbar-right" role="search">
										<div class="form-group">
				    						<input type="text" class="form-control" placeholder="Search">
										</div>
										<button type="submit" class="btn btn-default">Submit</button>
										</form>
        							</li>
      							</ul>
    						</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
		</header>
	</div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			  <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox" id="carousel-wrapper">
				<div class="item active">
					<img class="images" src="http://localhost/dpo/res/img/home.jpg" alt="Dolphins">
			    	<div class="carousel-caption">
			    	<div id="logo-container"><img src="http://localhost/dpo/res/img/logo.png" class="main-logo"></div>
			    	<p><strong class="cardenals">SERVICE</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
			      </div>
			    </div>
			    <div class="item">
			      <img class="images" src="http://localhost/dpo/res/img/home.jpg" alt="Dolphins">
			      <div class="carousel-caption">
			      <div id="logo-container"><img src="http://localhost/dpo/res/img/logo.png" class="main-logo"></div>
			      	<p><strong class="cardenals">UNITY</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
			      </div>
			    </div>
			    <div class="item">
			      <img class="images" src="http://localhost/dpo/res/img/home.jpg" alt="Dolphins">
			      <div class="carousel-caption">
			      <div id="logo-container"><img src="http://localhost/dpo/res/img/logo.png" class="main-logo"></div>
			      	<p><strong class="cardenals">LEADERSHIP</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>


<!-- this is the login modal -->
		<div id="user-login-modal">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<br/>
			<br/>
			<br/>
			<br/>
  				<div class="modal-dialog">
    				<div class="modal-content">
    					<form action="#" method="POST" name="login">
      						<div class="modal-header">
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       							<h4 class="modal-title" id="myModalLabel">Login</h4>
      						</div>

      						<div id="login-logo">
      							<img src="http://localhost/dpo/res/img/logo.png">
      						</div>

      						<div class="modal-body" id="modal-user-login">
      							<ul> 
        							<li class="input-group">
        								<label for="username"></label>  
        								<input type="text" name="username" placeholder="Username" required>
        							</li> 
        							<li class="input-group">
        								<label for="password"></label>  
        								<input type="password" name="password" placeholder="Password" required>
        							</li>  
        							<li class="input-group">
        								<label for="bapname"></label>  
        								<input type="text" name="bapname" placeholder="Baptismal name" required>
        							</li>
    							</ul> 
      						</div>
      						<div class="modal-footer">
        					<button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
        					<button type="button" class="btn btn-primary" name="submit">Submit</button>
      						</div>
      					</form>
    				</div>
  				</div>
			</div>
		</div>


<div id="history" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  				<div class="modal-dialog modal-lg">
    				<div class="modal-content">
    					<section>
    						<div id="about-us-content">
    						    <header>
                            		<h3>Delta Pi Omega Founders</h3>
                            	</header>
                            	<div id="founders-image" align="center">
                            		<img src="http://localhost/dpo/res/img/demo.jpg">
                            	</div>
    							<header>
    								<h3>Our History</h3>
    							</header>
    							<div id="about-us-history">
    								<p class="about-us">ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.</p>
                            	</div>
                            	<header>
                            		<h3>Mission and Vision</h3>
                            	</header>
                            	<div id="about-us-mission-vision">
									<p class="text_contents">ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.</p>
                            		<p class="text_contents">ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.</p>
                            		<br/>
                            		<p>See full description:<a href="" target="_blank">ipsum dolor sit amet</a>.</p>
                            	</div>
    						</div>
    					</section>
    				</div>
  				</div>
			</div>


	<!-- Introductions -->
	<div id="site-holder">
	<div class="container">
		<section id="short-description">
			<div>
				<article id="about-us">
					<header>
						<div align="center">
							<h1 class="article-titles">ipsum dolor sit amet</h1>
						</div>
					</header>
					<p class="default-article" id="">ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.</p>
                    <p class="default-article">ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.</p>
                 	<p class="default-article">ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.</p>
				</article>
			</div>
		</section>

		<div class="links">
		<br/>
		<br/>
			<a data-toggle="modal" data-target=".bs-example-modal-lg" id="view"><div align="center" id="more"><h3 id="more-activities">Read More</h3></div></a>
		<br/>
		</div>

	<!-- Members Messages -->

		<section id="founders-members-messages">
			<div id="greetings-holder">
				<div class="col-lg-4">
					<div align="center" id="founder-picture">
						<img id="img" src="http://localhost/dpo/res/img/demo.jpg">
						<p class="founder-name"><strong>Grasco Oscar Olila</strong></p>
					</div>
				</div>
				<div class="col-lg-8">
					<header>
						<h2 class="article-titles">Founders Message</h2>
					</header>
					<i class="" id="founders-messages">"ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet."</i>
					<br /><div align="right"><i>- Brod Oca -</i></div>
				</div>
			</div>
		</section>
	</div>
	</div>
	<div class="links">
		<div class="container">
			<a href="#" ><div align="left" id="next"><h3 id="more-activities">Next</h3></div></a>
			<a href="#" ><div align="right" id="previous"><h3 id="more-activities">Previous</h3></div></a>
		</div>
		<br/>
		<br/>
	</div>

		<!-- Activities Images or Snapshots -->

		<section id="activities-section">
		<div class="wrapper">
			<div class="container">
				<div class="col-lg-12">
					<header>
						<div align="center"><h1 class="article-titles">Activities</h1><p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet."</i></p></div>
					</header>
					<div class="row-lg-2">

					<?php 
					activitiesPreview(); 
					?>

					</div>
				</div>
			</div>
			<div class="links">
				<a href="#"><div align="center" id="more"><br/><h3 id="more-activities">See More</h3></div></a>
			</div>
		</div>
		</section>

		<div id="headlines-container">
        	<div id="s4" class="container bgcontainer">
            	<div id="AnnivcountdownTimer">
                	<div class="timer">
            		<?php
                		annivCountdown();
            		?>
                	</div>
            	</div>
            	<div class="row-lg-1" id="local-events-preview">
            		<div class="col-lg-12">
            			<div align="center"><h2>Local Upcoming Events</h2></div>
            		</div>
            		<div id="local-events">
        				<div class="col-lg-4">
        					<div class="new-events-image-wrapper" align="center">
        						<img src="http://localhost/dpo/res/img/demo.jpg" />
        					</div>
        					<div class="">
        						<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        					</div>
        				</div>
        				<div class="col-lg-4">
        					<div class="new-events-image-wrapper" align="center">
        						<img src="http://localhost/dpo/res/img/demo.jpg" />
        					</div>
        					<div class="">
        						<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        					</div>
        				</div>
        				<div class="col-lg-4">
        					<div class="new-events-image-wrapper" align="center">
        						<img src="http://localhost/dpo/res/img/demo.jpg" />
        					</div>
        					<div class="">
        						<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="links-activity">
				<a href="#"><div align="center" id="more-activity-local"><h3 id="more-activities-local">See More</h3></div></a>
			</div>
			<br />
    	</div>

    	<section id="members-awards">
			<div class="container">
				<div align="center">
					<h1 class="article-titles">Be Dolphins</h1>
				</div>
				<div class="row-lg-1" id="awards-list-wrapper">
					<div class="col-lg-3">
						<div class="awardees">
							<div>
								<h4>Awardee 1</h4>
							</div>
							<div class="awards-title-holder" align="center">
								<img src="http://localhost/dpo/res/img/demo.jpg">
							</div>
							<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="awardees"> 
							<h4>Awardee 2</h4>
							<div class="awards-title-holder" align="center">
								<img src="http://localhost/dpo/res/img/demo.jpg">
							</div>
							<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="awardees">
							<h4>Awardee 3</h4>
							<div class="awards-title-holder" align="center">
								<img src="http://localhost/dpo/res/img/demo.jpg">
							</div>
							<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="awardees">
							<h4>Awardee 4</h4>
							<div class="awards-title-holder" align="center">
								<img src="http://localhost/dpo/res/img/demo.jpg">
							</div>
							<p>ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- Javascripts -->
		<!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->

		<script type="text/javascript" src="http://localhost/dpo/res/js/jquery-2.1.3.min.js" ></script>
		<!--script type="text/javascript" src="http://localhost/dpo/res/js/bootstrap.js" ></script-->
		<script type="text/javascript" src="http://localhost/dpo/res/js/bootstrap.min.js" ></script>
		<!--script type="text/javascript" src="http://localhost/dpo/res/js/npm.js" ></script-->
		<script type="text/javascript">
			
			// $('#modal-content').on('shown.bs.modal', function () {$('#view').focus()})

			$(document).ready(function(){
				$('#about').click(function() {
					$('html, body').animate ({
						scrollTop:$('#short-description').position().top
						}, 'slow');
				})
			})
			$(document).ready(function(){
				$('#projects').click(function() {
					$('html, body').animate ({
						scrollTop:$('#activities-section').position().top
						}, 'slow');
				})
			})
			$(document).ready(function(){
				$('#info').click(function() {
					$('html, body').animate ({
						scrollTop:$('#contact-details').position().top
						}, 'slow');
				})
			})
		</script>
	</body>
	<footer>
		<div class="info-wrapper">
			<div class="container" id="contact-details">
				<div class="row-lg-1">
					<div class="col-lg-3">
						<h5 class="info-headings">Chapters</h5>
						<ul>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
						</ul>
					</div>
					<div class="col-lg-3">
						<h5 class="info-headings">Activities</h5>
						<ul>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
						</ul>
						<h5 class="info-headings">Awards</h5>
						<ul>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
						</ul>
					</div>
					<div class="col-lg-3">
						<header><h5 class="info-headings">Organization Partners</h5></header>
						<ul>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
							<li>Aklan Chapter</li>
						</ul>
					</div>
					<div class="col-lg-3">
						<h5 class="info-headings">Page Visitors</h5>
						<p>5436 Visits</p>
						<h5 class="info-headings">Facebook likes</h5>
						<p>5436 Visits</p>
						<h5 class="info-headings">Contact Us</h5>
						<p><i class="icon-phone-sign"></i> Mobile: +63999 998 9292 </p>
						<p><i class="icon-user"></i> Email: dpoweb@yahoo.com</p>
						<h5 class="info-headings">We Socialize</h5>
						<div class="social-links">
							<a><img id="facebook" src="http://localhost/dpo/res/img/ico/facebook-ico.png"></a>
						</div>
						<div class="social-links">
							<a href="https://www.youtube.com/watch?v=_x5Xja7dOdc" target="_blank"><img id="youtube" src="http://localhost/dpo/res/img/ico/youtube-ico.png"></a>
						</div>
						<div class="social-links">
							<a><img id="instagram" src="http://localhost/dpo/res/img/ico/instagram-ico.png"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!--<audio controls autoplay style="display: none;">
        <source src="media/ihaveyou.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio> -->
	</footer>
</html>