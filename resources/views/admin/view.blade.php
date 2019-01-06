<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LU Dept. Of CSE Admin - Dashboard</title>

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Charm|Staatliches" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Charm|Lobster|Staatliches" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
   

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />



    <!-- Date Format -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('css/admin-css/css/main.css') }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



  </head>
  

<body id="page-top" class="bg">

  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">

    <a class="navbar-brand form-txt-four" href="http://localhost/final_year_project/public">Dept. Of CSE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto nav-list list-inline mx-auto justify-content-center form-txt-four">


            <!-- User Menu-->

                <li class="dropdown" style="position: absolute;right: 0;top:0"> <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                    </ul>
                </li>

        </ul>
       
    </div>

  </nav>

<!--Content Form -->
<div class="row form-txt" style="margin-top: 120px;">
<div class="container">
   <div id="con" class="card custom-card-two mx-auto mt-5">
      <div class="card-header col-md-12">
          Supervisor Distribution
          <a href="{{ asset('admin') }}" class="btn btn-dark btn-sm custom-btn float-right">Back</a>
      </div>


@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
@endif 

{!! Form::model($post,['method'=>'POST','action'=>['AdminController@store_two', $post->project_id],'files'=>true]) !!}
  
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-label-group">        

          {!! Form::text('project_id',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}

          {!! Form::label('project_id','Project ID: ') !!}

        </div>
      </div>

      <div class="col-md-6">

       <div class="form-label-group">          

            <select name="personal_id" class="form-control" id="exampleFormControlSelect1">
             @foreach($supervisors as $supervisor)

              <option>{{$supervisor->personal_id}}</option>

             @endforeach 
            </select>
         
        </div>

      </div>

    </div>

      

    <div class="row" style="margin-top: 12px;">
      
      <div class="col-md-12">
        <div class="form-label-group">

            <select name="supervisor_name" class="form-control" id="exampleFormControlSelect1">
               @foreach($supervisors as $supervisor)

                <option>{{$supervisor->name}}</option>

               @endforeach 
            </select>

        </div>
      </div>

    </div>

  </div>


      <div class="card-footer text-right">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ asset('admin') }}" class="btn btn-dark btn-sm custom-btn">Cancle</a>
                  {!! Form::submit('Send',['class'=>'btn btn-dark btn-sm custom-btn']) !!}
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

     </div>
</div>
</div>










      <!-- Bootstrap core JavaScript-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{URL::asset('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{URL::asset('js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{URL::asset('js/demo/datatables-demo.js')}}"></script>


  </body>

</html>
