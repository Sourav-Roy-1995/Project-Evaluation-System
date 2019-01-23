	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Project Slide</h1>
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
							<div class="card-title"><a href="prev_project">
								{{$prev_project->project_title}}</a></div>
							<div class="card-text custom-card-txt">{{$prev_project->project_txt}}</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/profile_icon.png" alt="">
							</div>
							<div class="course_author_name">{{$prev_project->name}}, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>
							{{$prev_project->project_type}} Project</span></div>
						</div>
					</div>
				</div>
				@endforeach
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

								<input id="search_form_category" name="personal_id" class="input_field search_form_category" type="text" placeholder="ID" >

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
					
					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal">
						<h3>Third Year || Final Year Student</h3>
					</button>
					<p>For third year project all students have to complete at least 70 credits and all of the related subjects.For final year project all student...</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					
					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal2">
						 <h3>Project Approval</h3>
					</button>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					
					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal3">
						<h3>Approval Acceptation Or Rejection</h3>
				   </button>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-3 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
				
					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal4">
						<h3>Assigning Project Faculty</h3>
				   </button>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-3 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					
					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal5">
						<h3>Project Development</h3>
				   </button>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-3 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/blackboard.svg" alt="">
					</div>

					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal6">
						<h3>Submission Date</h3>
				   </button>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

				<div class="col-lg-3 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/mortarboard.svg" alt="">
					</div>

					<button type="button" class="btn btn-primary custom-modal-btn" data-toggle="modal" data-target="#exampleModal7">
						<h3>Final Presentation</h3>
				   </button>
					<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
				</div>

			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Third Year || Final Year Student</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> For third year project all students have to complete at least 70 credits and all of the related subjects.For final year project all student have to complete 140 credits.<br>
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Project Approval</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Approval Acceptation Or Rejection</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Assigning Project Faculty</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Project Development</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Submission Date</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Final Presentation</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<i class="fas fa-hand-point-right"></i> Students have to register first for project.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
			<i class="fas fa-hand-point-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div> <!-- Modal -->

<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/student.jpg)"></div>
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
							@foreach($std_comments as $std_comment)
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">{{$std_comment->comment}}</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="{{asset('images/'.$std_comment->personal_img)}}" alt="">
										</div>
										<div class="testimonial_name">{{$std_comment->name}}</div>
										<div class="testimonial_title">{{$std_comment->status}}</div>
									</div>
								</div>
							</div>
							@endforeach

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