@extends('includes.header')

@foreach($schedules as $schedule)

@endforeach


	<div class="register" style="margin-top: -39px">

		<div class="container-fluid">
			
			<div class="row row-eq-height">

				<div class="col-lg-12 nopadding" style="height:64pc;">			

					<div class="search_section d-flex flex-column align-items-center justify-content-center" style="margin-top:5pc">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center" >
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
					
					{!! Form::textarea('description',null,['class'=>'input_field search_form_name','required'=>'required', 'data-error'=>'description is required.','placeholder'=>'Description','style'=>'height:250px;margin-bottom:3px']) !!}

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
				

				<div class="input-group mb-3">

						{!! Form::text('studentid_two',null,['class'=>'form-control studentid_two','placeholder'=>'Students Id:','disabled'=>'true','cursor'=>'default' ]) !!}

						<div class="input-group-append">
							<a href="#studentid_two" class="btn btn-info btn-sm input-group-text add_std_one">Add</a>
						</div>
				</div>


				<div class="input-group mb-3">				

					{!! Form::text('studentid_three',null,['class'=>'form-control studentid_three','placeholder'=>'Students Id:','disabled'=>'true','cursor'=>'default' ]) !!}

					<div class="input-group-append">
							<a href="#studentid_three" class="btn btn-info btn-sm input-group-text add_std_two">Add</a>
					</div>

				</div>



			    <div class="form-group">
			    	
			    	{!! Form::submit('REGISTER',['class'=>'btn btn-primary reg-btn','id'=>'search_submit_button', 'type'=>'submit','class'=>'search_submit_button trans_200']) !!}
			    	
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>

	$('.add_std_one').on('click',function(){
        student_two();
    });

	$('.add_std_two').on('click',function(){
        student_three();
    });

    function student_two(){
        $(".studentid_two").prop('disabled', false).attr("placeholder", "Student Id");
    }

	
    function student_three(){
		$(".studentid_three").prop('disabled', false).attr("placeholder", "Student Id");
    }
   
	window.onload = function reg_range(){

		 start_date =   "{{$schedule->reg_fr_date}}"
		 end_date   =   "{{$schedule->reg_to_date}}"
		 today      =   "{{ date('d-m-Y') }}"
    
	     reg_start_date = parseInt(start_date,10);
		 reg_end_date = parseInt(end_date,10);
		 current_date = parseInt(today,10);


		 if(current_date >= reg_start_date || current_date <= reg_end_date){

			$(".search_form_name").prop('disabled', false).attr("placeholder", "Enabled");
			
		 }

		 if(current_date < reg_start_date || current_date > reg_end_date){

			$(".search_form_name").prop('disabled', true).attr("placeholder", "Disabled");

		}





	}

</script>