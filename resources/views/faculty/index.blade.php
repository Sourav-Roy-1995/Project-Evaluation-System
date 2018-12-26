<!DOCTYPE HTML>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Faculty Members</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

      <!-- Fonts-->
      <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

      <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Charm|Staatliches" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Charm|Lobster|Staatliches" rel="stylesheet">

    <!-- Date Format -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/admin-css/css/main.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">

</head>


	<body>
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
			  <div class="author-img" style="background-image: url(images/about.jpg);"></div>
			  <h1 id="colorlib-logo" ><a href="#" class="dept-font">{{ Auth::User()->name }}</a></h1>
			  <span class="position faculty-txt"><a style="color:#004A43!important" href="#">Faculty</a>,Leading University</span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
			  <div class="navbar" class="collapse">
				<ul class="form-txt-two">
				  <li class="active"><a href="{{ asset('/') }}" data-nav-section="home">Home</a></li>
				  <li><a href="#" data-nav-section="about">About</a></li>
				  <li><a href="#personal" data-nav-section="personal_project">Personal Project</a></li>
				  <li class="dropdown"><a href="#all" data-toggle="dropdown" data-nav-section="project_list">All Project</a></li>
	  
	  
	  
				  <li><a href="#marking" data-nav-section="education">Marking</a></li>
				  <li><a href="#" data-nav-section="experience">Experience</a></li>
				  <li><a href="#" data-nav-section="work">Work</a></li>
				  <li><a href="#" data-nav-section="blog">Blog</a></li>
				  <li><a href="#" data-nav-section="contact">Contact</a></li>
				  
				</ul>
			  </div>
			</nav>
	  
		  </aside>

		<div id="colorlib-main">


				
		</div><!-- end:colorlib-main -->
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->



	</body>


</html>

