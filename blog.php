<!DOCTYPE html>
<html lang="en">															
<head>																		
	<!-- DO NOT REMOVE THIS LINE: DDC-EX-REV-D -->
	<title>Responsive Web Services | OG Web Design</title>
    <meta charset="utf-8"> 		  			       	               			
    <meta content="width=device-width, initial-scale=1.0" name="viewport"> 
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="" />

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<script type="text/javascript">
		$(document).ready(function(){
			$(".press-release").each(function(){

				if($(this).children("p").length > 1){
					$('<div><a href="#readmore" class="readmore">Read More&hellip;</a></div>').appendTo($(this));

					$(this).children("p").first().addClass('first-p');
					$(this).children("p").not('.first-p').hide();
					
					$(this).find('.readmore').click(function(){
						$(this).parent().siblings('p').not('.first-p').slideToggle(500);
						return false;
					});
				}

			});
		});
	</script>
</head>
<body>
	<header>
		<div class="navbar  navbar-inverse" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	         <!--  <a class="navbar-brand" href="#">Project name</a> -->
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav nav-left">
	            <li class="nav-link first"><a href="#solutions">Solutions</a></li>
	            <li class="nav-link"><a href="#services" >Services</a></li>
	            <li class="nav-link"><a href="blog.php">Blog</a></li>
	            <li class="nav-link"><a href="#company">Company</a></li>
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            <li><span class="contact-info-phone pull-right">Call Us Today <a href="#">(443) 846-5909</a></span></li>
	          </ul>
	        </div><!-- /.nav-collapse -->

	      </div><!-- /.container -->
	    </div>  
<!-- 	    <a href="http://www.dealer.com">
	      <img src="logo.png" class="img-responsive logo" alt="Responsive image">
	    </a> -->
	</header>
	<div class="container">
	<div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post press-release">
            <h2 class="blog-post-title">Dealer.com Awarded Patent for its Human Voice Inventory Video Technology</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor libero, volutpat ut lacinia ut, lobortis at massa. Etiam condimentum laoreet dolor, cursus auctor leo tristique a. Donec congue vulputate nisl, a aliquam libero aliquet at. Proin auctor enim vitae lectus lacinia vitae ullamcorper dolor tempus. Ut at ligula mi. Curabitur nisl sapien, laoreet vel blandit quis, condimentum interdum eros. Duis eget sem justo. Vivamus sit amet ante massa, eu facilisis ipsum. Ut fermentum convallis placerat. Suspendisse sit amet felis cursus mauris tempor facilisis.</p>
		  </div><!-- /.blog-post -->
          <div class="blog-post press-release">
					<h2 class="blog-post-title">Dealer.com Awarded "Highest Rated" Dealer Satisfaction Award for MobileSites by DrivingSales</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor libero, volutpat ut lacinia ut, lobortis at massa. Etiam condimentum laoreet dolor, cursus auctor leo tristique a. Donec congue vulputate nisl, a aliquam libero aliquet at. Proin auctor enim vitae lectus lacinia vitae ullamcorper dolor tempus. Ut at ligula mi. Curabitur nisl sapien, laoreet vel blandit quis, condimentum interdum eros. Duis eget sem justo. Vivamus sit amet ante massa, eu facilisis ipsum. Ut fermentum convallis placerat. Suspendisse sit amet felis cursus mauris tempor facilisis.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor libero, volutpat ut lacinia ut, lobortis at massa. Etiam condimentum laoreet dolor, cursus auctor leo tristique a. Donec congue vulputate nisl, a aliquam libero aliquet at. Proin auctor enim vitae lectus lacinia vitae ullamcorper dolor tempus. Ut at ligula mi. Curabitur nisl sapien, laoreet vel blandit quis, condimentum interdum eros. Duis eget sem justo. Vivamus sit amet ante massa, eu facilisis ipsum. Ut fermentum convallis placerat. Suspendisse sit amet felis cursus mauris tempor facilisis.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor libero, volutpat ut lacinia ut, lobortis at massa. Etiam condimentum laoreet dolor, cursus auctor leo tristique a. Donec congue vulputate nisl, a aliquam libero aliquet at. Proin auctor enim vitae lectus lacinia vitae ullamcorper dolor tempus. Ut at ligula mi. Curabitur nisl sapien, laoreet vel blandit quis, condimentum interdum eros. Duis eget sem justo. Vivamus sit amet ante massa, eu facilisis ipsum. Ut fermentum convallis placerat. Suspendisse sit amet felis cursus mauris tempor facilisis.</p>
		  </div><!-- /.blog-post -->
          <div class="blog-post press-release" style="border-bottom:none;">
		  			<h1 class="blog-post-title">The Dealer.com Digital Website Suite Features Powerful Marketing & Management Apps in One Platform</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor libero, volutpat ut lacinia ut, lobortis at massa. Etiam condimentum laoreet dolor, cursus auctor leo tristique a. Donec congue vulputate nisl, a aliquam libero aliquet at. Proin auctor enim vitae lectus lacinia vitae ullamcorper dolor tempus. Ut at ligula mi. Curabitur nisl sapien, laoreet vel blandit quis, condimentum interdum eros. Duis eget sem justo. Vivamus sit amet ante massa, eu facilisis ipsum. Ut fermentum convallis placerat. Suspendisse sit amet felis cursus mauris tempor facilisis.</p>
		  </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <ol class="list-unstyled">
			<section class="previous-releases previous-releases-individual">
				<h4>Previous Releases</h4>
				<ul>
					<li>
						<time datetime="2012-01-23">January 23, 2012</time>
						<p>Dealer.com awarded coolest place to work in Burlington, VT. After weeks of voting...</p>
						<p>
							<a href="#">read more >>&nbsp;</a>
						</p>
					</li>
					<li>
						<time datetime="2012-01-01">January 1, 2012</time>
						<p>Dealer.com brings in the new year with a bang! The month of January is always an...</p>
						<p>
							<a href="#">read more >>&nbsp;</a>
						</p>
					</li>
					<li>
						<time datetime="2011-12-18">December 18, 2011</time>
						<p>Dealer.com awarded coolest place to work in Burlington, VT. After weeks of voting...</p>
						<p>
							<a href="#">read more >>&nbsp;</a>
						</p>
					</li>
				</ul>
			</section>

			<section>
				<h4>Previous Releases</h4>
				<h5>2012 Archive</h5>
				<ul>
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  April</a>
					</li>					
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  March</a>
					</li>					
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  February</a>
					</li>				
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  January</a>
					</li>				
				</ul>
			</section>

			<section>
				<h4>Full Releases Archive</h4>
				<ol>
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  2011 Full Archive</a>
					</li>		
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  2010 Full Archive</a></li>		
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  2009 Full Archive</a></li>	
					<li><a href="#" class="sidebar-link"><img src="play.png" width="10px">  2008 Full Archive</a></li>		
				</ol>

			</section>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div>
      </div><!-- /.container -->
	<div class="footer">
	
      <div class="container">
      <div class="row">
		  <div class="col-md-8">
			<h3>Learn More About Dealer.com</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tortor libero, volutpat ut lacinia ut, lobortis at massa. Etiam condimentum laoreet dolor, cursus auctor leo tristique a. Donec congue vulputate nisl, a aliquam libero aliquet at. Proin auctor enim vitae lectus lacinia vitae ullamcorper dolor tempus. Ut at ligula mi. Curabitur nisl sapien, laoreet vel blandit quis, condimentum interdum eros. Duis eget sem justo. Vivamus sit amet ante massa, eu facilisis ipsum. Ut fermentum convallis placerat. Suspendisse sit amet felis cursus mauris tempor facilisis.</p>
			<table>
				<tbody>
					<tr>
						<td>
							<a href="http://www.linkedin.com" class="linked">
								<img src="linkedin.png" width="42px"/> LinkedIn
							</a>
						</td>
						<td>
							<a href="http://www.facebook.com" class="facebook">
								<img src="facebook.png" width="42px"/> Facebook
							</a>
						</td>
						<td>
							<a href="#rss" class="rss">
								<img src="RSS.png" width="42px"/> Subscribe
							</a>
						</td>
					</tr>
				</tbody>
			</table>	  	
		  </div><!-- /.col -->
		  <div class="col-md-4">
		  <h3>Contact Sales</h3>
			<p>Please fill out the form below and a sales representative will contact you.</p>
				 <div class="alert alert-danger" id="error">
			      <h4>Error:</h4>
			      <div class="error-msg" id="error-msg">
			      </div>
			     </div>
				 <div class="alert alert-success" id="success">
			      <h4>Message Sent Successfully!</h4>
			     </div>
			<form class="form-horizontal" method="post" id="quick-contact-form">
			  <div class="form-group">
			    <label for="inputName" class="col-sm-4 control-label label-padded">Name</label>
			    <div class="col-sm-8">
			      <input type="name" class="form-control" id="name" placeholder="Full Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPhone" class="col-sm-4 control-label label-padded">Phone</label>
			    <div class="col-sm-8">
			      <input type="phone" class="form-control" id="phone" placeholder="Phone">
			    </div>
			  </div>		
			  <div class="form-group">
			    <label for="inputEmail" class="col-sm-4 control-label label-padded">Email</label>
			    <div class="col-sm-8">
			      <input type="email" class="form-control" id="email" placeholder="Email">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputComments" class="control-label comment">Comments</label>
			    <div class="col-sm-12">
			      <textarea class="form-control" rows="3" id="comment"></textarea>
			    </div>
			  </div>	

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default btn-sm pull-right active">Sign in</button>
			    </div>
			  </div>
			</form>
		  </div><!-- /.col -->
		</div><!-- /.row -->
      </div><!-- /.container -->
	</div><!-- /.footer -->
</body>
</html>
