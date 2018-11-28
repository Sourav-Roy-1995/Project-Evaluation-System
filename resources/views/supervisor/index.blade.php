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


  <link rel="stylesheet" href="css/profile.css">

    <!-- Date Format -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/admin-css/css/main.css">
    <link href="css/style.css" rel="stylesheet">

</head>

  <body>

  <div id="colorlib-page">
    <div class="container-wrap">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
      <div class="text-center">
        <div class="author-img" style="background-image: url(images/about.jpg);"></div>
        <h1 id="colorlib-logo"><a href="index.html">{{ Auth::User()->name }}</a></h1>
        <span class="position"><a href="#">Faculty</a> in Leading University</span>
      </div>
      <nav id="colorlib-main-menu" role="navigation" class="navbar">
        <div id="navbar" class="collapse">
          <ul>
            <li class="active"><a href="http://localhost/final_year_project/public" data-nav-section="home">Home</a></li>
            <li><a href="#" data-nav-section="about">About</a></li>
            <li><a href="#" data-nav-section="services">Student List</a></li>
            <li><a href="#" data-nav-section="skills">Project List</a></li>
            <li><a href="#" data-nav-section="education">Marking</a></li>
            <li><a href="#" data-nav-section="experience">Experience</a></li>
            <li><a href="#" data-nav-section="work">Work</a></li>
            <li><a href="#" data-nav-section="blog">Blog</a></li>
            <li><a href="#" data-nav-section="contact">Contact</a></li>
            
          </ul>
        </div>
      </nav>

    </aside>

    <div id="colorlib-main">



    <div class="card mb-3" style="margin-top: 30px">
            <div class="card-header" id="supervisorlist">
              <i class="fas fa-table"></i>
              Students Information</div>
            <div class="card-body">

           <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->

              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Project ID</th>
                      <th>Supervisor Id:</th>
                      <th>Supervisor Name:</th>
                      <th>Course Code:</th>                      
                      <th>semester</th>
                      <th>studentid one</th>
                      <th>studentid two</th>
                      <th>studentid three</th>
                      <th>view</th>
                    </tr>
                  </thead>

                @foreach($supervisorstudents as $supervisorstudent)
                  <tbody id="myTable2">
                    <tr>
                      <td>{{$supervisorstudent->project_id}}</td>
              
                      <td>{{$supervisorstudent->personal_id}}</td>

                      <td>{{$supervisorstudent->supervisor_name}}</td>

                      <td>{{$supervisorstudent->course_code}}</td>

                      <td>{{$supervisorstudent->semester}}</td>

                      <td>{{$supervisorstudent->studentid_one}}</td>

                      <td>{{$supervisorstudent->studentid_two}}</td>

                      <td>{{$supervisorstudent->studentid_three}}</td>

                      <td><a href="{{route('supervisor.view',$supervisorstudent->project_id)}}" class='btn btn-info btn-sm' name="name" >View</a></td>
                      
                    </tr>
                  </tbody>
                  @endforeach

                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


    <!--Content Form -->
<div class="row" style="margin-top: 50px;">
<div class="container">
   <div id="con" class="card">
      <div class="card-header col-md-12">
         Result Sheet
          <a href="javascript:history.back()" class="btn btn-info btn-sm float-right">Back</a>
      </div>

  

{!! Form::open(['id'=>'search_form','class'=>'search_form',     
    'method'=>'POST','action'=>'SupervisorController@store','files'=>true]) !!}
  

  <div class="card-body">

   <div class="row">
      <div class="col-md-6">
        <div class="form-label-group">        

          {!! Form::text('project_id',null,['class'=>'form-control']) !!}

          {!! Form::label('project_id','Project Id: ') !!}

        </div>
      </div>

      <div class="col-md-6">
          <div class="form-label-group">          

            {!! Form::text('student_id',null,['class'=>'form-control']) !!}

            {!! Form::label('student_id','Student Id: ') !!}

          </div>
      </div>
    </div>


   <div class="row" style="margin-top: 12px;">
      <div class="col-md-6">
        <div class="form-label-group">        

          {!! Form::text('personal_id',null,['class'=>'form-control']) !!}

          {!! Form::label('personal_id','Your ID: ') !!}

        </div>
      </div>

      <div class="col-md-6">
          <div class="form-label-group">          

            {!! Form::text('identification',null,['class'=>'form-control']) !!}

            {!! Form::label('identification','Identification Of Problem: ') !!}

          </div>
      </div>
    </div>

    <div class="row" style="margin-top: 12px;">
      <div class="col-md-6">
        <div class="form-label-group">        

          {!! Form::text('complexity',null,['class'=>'form-control']) !!}

          {!! Form::label('complexity','Complexity Of Design: ') !!}

        </div>
      </div>

      <div class="col-md-6">
          <div class="form-label-group">          

            {!! Form::text('viva',null,['class'=>'form-control']) !!}

            {!! Form::label('viva','Viva ') !!}

          </div>
      </div>
    </div>

      
    <div class="row" style="margin-top: 12px;">
      
      <div class="col-md-6">

        <div class="form-label-group">

          {!! Form::text('presentation',null,['class'=>'form-control']) !!}

          {!! Form::label('presentation','Presentation:: ') !!}

        </div>

      </div>

      <div class="col-md-6">
        
        <div class="form-label-group">          

          {!! Form::text('evaluation',null,['class'=>'form-control']) !!}

          {!! Form::label('evaluation','Optimizing,Testing,Evaluation: ') !!}

        </div>

      </div>  
    </div>


    <div class="row" style="margin-top: 12px;">
      
      <div class="col-md-6">
        <div class="form-label-group">

            {!! Form::text('documentation',null,['class'=>'form-control']) !!}

            {!! Form::label('documentation','Documentation: ') !!}

        </div>
      </div>

      <div class="col-md-6">
        
        <div class="form-label-group">          

          {!! Form::text('time',null,['class'=>'form-control']) !!}
          {!! Form::label('time','Time Management: ') !!}

        </div>

      </div>
    </div>


    <div class="row" style="margin-top: 12px;">
      
      <div class="col-md-6">
        <div class="form-label-group">

          {!! Form::text('teamwork',null,['class'=>'form-control']) !!}

            {!! Form::label('teamwork','Team Work: ') !!}

        </div>
      </div>

      <div class="col-md-6">
        
        <div class="form-label-group">          

          {!! Form::text('research',null,['class'=>'form-control']) !!}
          {!! Form::label('research','Research: ') !!}

        </div>

      </div>
    </div>


    <div class="row" style="margin-top: 12px;">
      
      <div class="col-md-6">
        <div class="form-label-group">

          {!! Form::text('alternative_solution',null,['class'=>'form-control']) !!}

            {!! Form::label('alternative_solution','Alternative Solutions: ') !!}

        </div>
      </div>

      <div class="col-md-6">
        
        <div class="form-label-group">          

          {!! Form::text('total',null,['class'=>'form-control']) !!}
          {!! Form::label('total','Total: ') !!}

        </div>

      </div>
    </div>


  </div>


    <div class="card-footer text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="javascript:history.back()" class="btn btn-info custom-btn btn-sm">Cancle</a>
              {!! Form::submit('Send',['class'=>'btn btn-info btn-sm']) !!}

          </div>
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

    <div class="text-right">
        
            <button class="btn btn-info custom-btn btn-sm" id="btn2">Supervisor?</button>
         
    </div>      

        
     </div>
</div>
</div>


        
    </div><!-- end:colorlib-main -->
  </div><!-- end:container-wrap -->
</div><!-- end:colorlib-page -->






  
  <!-- MAIN JS -->
  <script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>

