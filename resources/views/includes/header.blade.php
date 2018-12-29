<!DOCTYPE html>
<html lang="en">
<head>
<title>CSE || Leading University</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
<link rel="stylesheet" href="css/admin-css/css/main.css">


</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/Leading_University_Logo.png" alt="">					
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="http://localhost/final_year_project/public/">Home</a></li>
						<li class="main_nav_item"><a href="faculty">Faculty</a></li>
						<li class="main_nav_item"><a href="supervisor">Supervisor</a></li>
						<li class="main_nav_item"><a href="supervisorlist">Supervisor List</a></li>
						<li class="main_nav_item"><a href="elligible_student">Eligible Student</a></li>
						<li class="main_nav_item"><a href="registration">Project Registration</a></li>					
						<li class="main_nav_item"><a href="supervisor">Result</a></li>
						<li class="main_nav_item"><a href="contact">Contact</a></li>
						<li class="main_nav_item"><a href="admin">Admin</a></li>
						<li class="main_nav_item"><a href="student_panel">Student Panel</a></li>

						<!-- Authentication Links -->

		                    @if (Auth::guest())
		                        <li class="main_nav_item"><a href="{{ url('/login') }}">Login||Reg</a></li>
		                        
		                    @else
		                        <li class="dropdown main_nav_item">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                                {{ Auth::user()->name }} <span class="caret"></span>
		                            </a>

		                            <ul class="dropdown-menu" role="menu">
		                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
		                            </ul>
		                        </li>
		                    @endif
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+880-821-720303-6</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>


	</header>