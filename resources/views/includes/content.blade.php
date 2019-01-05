	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Project</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes owl-carousel" id="owl-example" >
				
				<!-- Popular Course Item -->
				@foreach($prev_projects as $prev_project)
				<div class="item">
					<div class="card">
					<img class="card-img-top" src="{{asset('images/'.$prev_project->project_img)}}" alt="Owl Image">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">
								{{$prev_project->project_title}}</a></div>
							<div class="card-text">{{$prev_project->project_txt}}</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="">
							</div>
							<div class="course_author_name">{{$prev_project->name}}, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>
							{{$prev_project->project_type}} Project</span></div>
						</div>
					</div>
				</div>
				@endforeach

				<!-- Popular Course Item -->
				<div class="item">
					<div class="card">
						<img class="card-img-top" src="images/course_2.jpg" alt="Owl Image">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Library Management</a></div>
							<div class="card-text">Lorem ipsum lorem ipsum lorem ipsum  etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Sourav Roy, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>free in charge</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="item">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg" alt="Owl Image">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php">Student Management</a></div>
							<div class="card-text">Lorem ipsum lorem ipsum lorem ipsum  etc...</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/author.jpg" alt="">
							</div>
							<div class="course_author_name">Sourav Roy, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>free in charge</span></div>
						</div>
					</div>
				</div>

				  <div class="item">
						<div class="card">
							<img class="card-img-top" src="images/course_1.jpg" alt="Owl Image">
							<div class="card-body text-center">
								<div class="card-title"><a href="courses.php">Air Line</a></div>
								<div class="card-text">Lorem ipsum lorem ipsum lorem ipsum  etc...</div>
							</div>
							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="">
								</div>
								<div class="course_author_name">Sourav Roy, <span>Author</span></div>
								<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>free in charge </span></div>
							</div>
						</div>
					</div>
	
					<!-- Popular Course Item -->
					<div class="item">
						<div class="card">
							<img class="card-img-top" src="images/course_2.jpg" alt="Owl Image">
							<div class="card-body text-center">
								<div class="card-title"><a href="courses.php">Blog System</a></div>
								<div class="card-text">Lorem ipsum lorem ipsum lorem ipsum  etc...</div>
							</div>
							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
								</div>
								<div class="course_author_name">Sourav Roy, <span>Author</span></div>
								<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>free in charge</span></div>
							</div>
						</div>
					</div>
	
					<!-- Popular Course Item -->
					<div class="item">
						<div class="card">
							<img class="card-img-top" src="images/course_3.jpg" alt="Owl Image">
							<div class="card-body text-center">
								<div class="card-title"><a href="courses.php">Framework</a></div>
								<div class="card-text">Lorem ipsum lorem ipsum lorem ipsum  etc...</div>
							</div>
							<div class="price_box d-flex flex-row align-items-center">
								<div class="course_author_image">
									<img src="images/author.jpg" alt="">
								</div>
								<div class="course_author_name">Sourav Roy, <span>Author</span></div>
								<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>free in charge</span></div>
							</div>
						</div>
					</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Registration For Project <span>Hurry Up! </span> </h1>
							<p class="register_text"> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="registration">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					<!-- Search -->
					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Are You Eligible For Project</h1>

							{!! Form::open(['id'=>'search_form','class'=>'search_form', 		
							'method'=>'POST','action'=>'StudentController@getAns','files'=>true]) !!}

								

								{!! Form::text('studentid',null,['class'=>'input_field search_form_name','placeholder'=>'Students Id:' ]) !!}

								<input id="search_form_category" name="studentname" class="input_field search_form_category" type="text" placeholder="Name">

								<input id="search_form_degree" name="semester" class="input_field search_form_degree" type="text" placeholder="Semester">

								<input id="search_submit_button" type="submit" class="search_submit_button trans_200" name="submit" value="GET ANS" >
								

								{!! Form::close() !!}
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Project Evaluation System</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Third Year || Final Year Student</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Project Approval</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					<h3>Approval Acceptation Or Rejection</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
					<h3>Assigning Project Faculty</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/blackboard.svg" alt="">
					</div>
					<h3>Submission Date</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/mortarboard.svg" alt="">
					</div>
					<h3>Final Presentation</h3>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/sourav.JPG)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our students say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat magna felis, vitae ornare lectus molestie pretium. Nam vitae est quis nisi interdum aliquet. Ut tellus elit, faucibus sit amet quam at, cursus bibendum turpis. Mauris ac nisi tempor, commodo tellus in, mattis justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/DSC_01141.JPG" alt="">
										</div>
										<div class="testimonial_name">Sourav Roy</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat magna felis, vitae ornare lectus molestie pretium. Nam vitae est quis nisi interdum aliquet. Ut tellus elit, faucibus sit amet quam at, cursus bibendum turpis. Mauris ac nisi tempor, commodo tellus in, mattis justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/DSC_01141.JPG" alt="">
										</div>
										<div class="testimonial_name">Sourav Roy</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat magna felis, vitae ornare lectus molestie pretium. Nam vitae est quis nisi interdum aliquet. Ut tellus elit, faucibus sit amet quam at, cursus bibendum turpis. Mauris ac nisi tempor, commodo tellus in, mattis justo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/DSC_01141.JPG" alt="">
										</div>
										<div class="testimonial_name">Sourav Roy</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Project Schedule</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">
				@foreach($schedules as $schedule)

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							
							<div class="col-lg-6 order-lg-1 order-3">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">
							            {{$schedule->fi_fr_date}}
						            </div>
									<div class="event_month">To</div>
									<div class="event_day">
										{{$schedule->fi_to_date}}
									 </div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">{{$schedule->final_year}}</a></div>
									<div class="event_location">
										{{$schedule->fi_semester}}
									</div>
									<p>{{$schedule->fi_info}}</p>
								</div>
							</div>

							

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-6 order-lg-1 order-3">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
										<div class="event_day">
											{{$schedule->th_fr_date}}
										</div>
										<div class="event_month">To</div>
										<div class="event_day">
											{{$schedule->th_to_date}}
										</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
									<div class="event_content">
										<div class="event_name"><a class="trans_200" href="#">{{$schedule->final_year}}</a></div>
										<div class="event_location">
											{{$schedule->th_semester}}
										</div>
										<p>{{$schedule->th_info}}</p>
									</div>
							</div>

							

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-6 order-lg-1 order-3">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">{{$schedule->rs_date}}</div>
									
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Project {{$schedule->result}}</a></div>
									<div class="event_location">All Project Result</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat magna felis, vitae ornare lectus molestie pretium.</p>
								</div>
							</div>

							

						</div>	
					</div>
				</div>

			</div>
			@endforeach
				
		</div>
	</div>