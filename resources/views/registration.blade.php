@extends('includes.header')
@extends('includes.menu')


	
	<!-- Home -->

	<div class="home" style="height:447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Make Registraion Here</h1>
		</div>
	</div>

	<!-- Elements -->


	<div class="register" style="margin-top: -39px">

		<div class="container-fluid">
			
			<div class="row row-eq-height">

				<div class="col-lg-12 nopadding">			

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Register Here</h1>


@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
@endif


	{!! Form::open(['id'=>'search_form','class'=>'search_form', 		
		'method'=>'POST','action'=>'ProjectListController@store','files'=>true]) !!}


				{{csrf_field()}}	


				<div class="form-group">
					
					{!! Form::hidden('project_id',null,['class'=>'input_field search_form_name']) !!}

				</div>
			
				<div class="form-group">
					
					{!! Form::text('project_name',null,['class'=>'input_field search_form_name','required'=>'required','data-error'=>'Project Name is required.','placeholder'=>'Project Name']) !!}

				</div>


				<div class="form-group">
					
					{!! Form::text('description',null,['class'=>'input_field search_form_name','required'=>'required', 'data-error'=>'description is required.','placeholder'=>'Description']) !!}

				</div>





				  <div class="form-group">          

			            <select name="course_code" class="form-control" id="exampleFormControlSelect1">
			             @foreach($regs as $reg)

			              <option>{{$reg->course_code}}</option>

			             @endforeach 
			            </select>
			         
			       </div>


				<div class="form-group">					

					<select name="semester" class="form-control" id="exampleFormControlSelect1">
			             @foreach($regs as $reg)

			              <option>{{$reg->semester}}</option>

			             @endforeach 
			        </select>

				</div>

				<div class="form-group">				

					{!! Form::text('studentid_one',null,['class'=>'input_field search_form_name', 'required'=>'required','data-error'=>'studentid is required.','placeholder'=>'Students Id:']) !!}

				</div>

				<div class="form-group">				

					{!! Form::text('studentid_two',null,['class'=>'input_field search_form_name','placeholder'=>'Students Id:']) !!}

				</div>

				<div class="form-group">				

					{!! Form::text('studentid_three',null,['class'=>'input_field search_form_name','placeholder'=>'Students Id:']) !!}

				</div>



			    <div class="form-group">
			    	
			    	{!! Form::submit('REGISTER',['class'=>'btn btn-primary','id'=>'search_submit_button', 'type'=>'submit','class'=>'search_submit_button trans_200']) !!}
			    	
			    </div>


		
		{!! Form::close() !!}


@if(count($errors) > 0)

			<div class="alert alert-danger">
				
				<ul>
					@foreach($errors->all() as $error)

						<li>{{$error}}</li>

					@endforeach

				</ul>

			</div>

@endif




						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>



@extends('includes.footer')