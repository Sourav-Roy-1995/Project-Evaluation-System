<?php
  date_default_timezone_set('Asia/Dhaka');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LU Dept. Of CSE Admin - Dashboard</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Fonts-->
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm|Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm|Lobster|Staatliches" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />



    <!-- Date Format -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/admin-css/css/main.css">
    <link href="css/style.css" rel="stylesheet">


  </head>

  <style rel="stylesheet">
      #marks_input{
        pointer-events: none;
      }
  </style>



  <body id="page-top" >

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">

          <a class="navbar-brand dept-font" href="http://localhost/final_year_project/public">Dept. Of CSE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav mr-auto nav-list list-inline mx-auto justify-content-center form-txt-four">

                <li class="nav-item ">
                  <a class="nav-link" href="importExport">Add Students</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#add_supervisor">Add Supervisor</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#projectstudent"> Student List</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#all_user">User List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#result">Result</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#reg"> Registration</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#reg"> Scheduling</a>
                </li>

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
        
<div id="wrapper" >
<div id="content-wrapper" class="form-txt-three">

<div class="container">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

<div id="reg" class="card">

      <div class="card-header col-md-12">
          Project Information
      </div>


@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
@endif


{!! Form::open(['id'=>'search_form','class'=>'search_form',     
    'method'=>'POST','action'=>'AdminController@store_three','files'=>true]) !!}

  
<div class="card-body">
<div class="row">
      <div class="col-md-4">
        <div class="form-label-group">        
            <input type="text" name="final_project" class="form-control disable-input" value="Final Year Project" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-label-group">          
            <select name="semester" class="form-control" id="exampleFormControlSelect1" style="height: 47px;">
                <option>Semester</option>
                <option>SUMMER-2018</option>
                <option>FALL-2018</option>
                <option>SPRING-2018</option>
            </select>
          </div>
      </div>
      <div class="col-md-4">
        <div class="form-label-group">        
            <textarea type="text" placeholder="Information" name="project-txt disable-input" class="form-control" required style="height: 47px;"></textarea>
        </div>
      </div>

      <div class="col-md-6" style="margin-top:1pc">
        <div class="form-label-group">        
            <input type="date" name="final_project" class="form-control" required>
            {!! Form::label('from','From: ') !!}
        </div>
     </div>
     <div class="col-md-6" style="margin-top:1pc">
        <div class="form-label-group">        
            <input type="date" name="final_project" class="form-control" required>
            {!! Form::label('to','To: ') !!}
        </div>
     </div>
</div>

<div class="row" style="margin-top:2pc">
        <div class="col-md-4">
          <div class="form-label-group">        
              <input type="text" name="final_project" class="form-control disable-input" value="Third Year Project" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-label-group">          
              <select name="semester" class="form-control" id="exampleFormControlSelect1" style="height: 47px;">
                  <option>Semester</option>
                  <option>SUMMER-2018</option>
                  <option>FALL-2018</option>
                  <option>SPRING-2018</option>
              </select>
            </div>
        </div>
        <div class="col-md-4">
          <div class="form-label-group">        
              <textarea type="text" placeholder="Information" name="project-txt disable-input" class="form-control" required style="height: 47px;"></textarea>
          </div>
        </div>
  
        <div class="col-md-6" style="margin-top:1pc">
          <div class="form-label-group">        
              <input type="date" name="final_project" class="form-control" required>
              {!! Form::label('from','From: ') !!}
          </div>
       </div>
      <div class="col-md-6" style="margin-top:1pc">
          <div class="form-label-group">        
              <input type="date" name="final_project" class="form-control" required>
                {!! Form::label('to','To: ') !!}
          </div>
      </div>
  </div>


  <div class="row" style="margin-top:2pc">
        <div class="col-md-6">
          <div class="form-label-group">        
              <input type="text" name="final_project" class="form-control disable-input" value="Result" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-label-group">        
              <input type="date" name="final_project" class="form-control" required>
              {!! Form::label('date','Date: ') !!}
          </div>
       </div>

  </div>

    </div>

<div class="card-footer text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
       <a href="javascript:history.back()" class="btn btn-info custom-btn btn-sm">Cancle</a>
         {!! Form::submit('Update',['class'=>'btn btn-info btn-sm custom-btn']) !!}
    </div>
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
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>



  </body>

</html>
