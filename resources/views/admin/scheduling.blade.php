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

    <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm|Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm|Lobster|Staatliches" rel="stylesheet">

    <!-- Date Format -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <link rel="stylesheet" href="css/admin-css/css/main.css">
    <link href="css/style.css" rel="stylesheet">


  </head>

  <body class="bg-two">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">

          <a class="navbar-brand dept-font" href="http://localhost/final_year_project/public">Dept. Of CSE</a>
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
        
<div id="wrapper" >
<div id="content-wrapper" class="form-txt-three">

<div class="container">

<div id="reg" class="card">

  <div class="card-header col-md-12 ">
    Project Information
    <div class="text-right">
        <div class="btn-group " role="group" aria-label="Basic example">
            <a href="{{ asset('admin') }}" class="btn btn-info btn-sm float-right custom-btn">Back</a>
        </div>
    </div>
  </div>


@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
@endif


{!! Form::open(['id'=>'search_form','class'=>'search_form',     
    'method'=>'POST','action'=>'AdminController@store_schedule','files'=>true]) !!}


<div class="card-body">
<div class="row">
      <div class="col-md-4">
        <div class="form-label-group">        
            <input type="text" name="final_year" class="form-control disable-input" value="Final Year Project" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-label-group">          
            <select name="fi_semester" class="form-control" id="exampleFormControlSelect1" style="height: 47px;">
                <option>Semester</option>
                <option>SUMMER-2018</option>
                <option>FALL-2018</option>
                <option>SPRING-2018</option>
            </select>
          </div>
      </div>
      <div class="col-md-4">
        <div class="form-label-group">        
            <textarea type="text" placeholder="Information" name="fi_info" class="form-control" required style="height: 47px;"></textarea>
        </div>
      </div>

      <div class="col-md-6" style="margin-top:1pc">
        <div class="form-label-group">        
            <input type="text" name="fi_fr_date" id="date_one" class="form-control" placeholder="Date" required>
            {!! Form::label('date_one','From: ') !!}
        </div>
     </div>
     <div class="col-md-6" style="margin-top:1pc">
        <div class="form-label-group">        
            <input type="text" name="fi_to_date" id="date_two" class="form-control" placeholder="Date" required>
            {!! Form::label('date_two','To: ') !!}
        </div>
     </div>
</div>

  
<div class="row" style="margin-top:2pc">
        <div class="col-md-4">
          <div class="form-label-group">        
              <input type="text" name="third_year" class="form-control disable-input" value="Third Year Project" required>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-label-group">          
              <select name="th_semester" class="form-control" id="exampleFormControlSelect1" style="height: 47px;">
                  <option>Semester</option>
                  <option>SUMMER-2018</option>
                  <option>FALL-2018</option>
                  <option>SPRING-2018</option>
              </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-label-group">        
              <textarea type="text" placeholder="Information" name="th_info" class="form-control" required style="height: 47px;"></textarea>
          </div>
        </div>
  
        <div class="col-md-6" style="margin-top:1pc">
          <div class="form-label-group">        
              <input type="text" name="th_fr_date" id="date_three" class="form-control" placeholder="Date" required>
              {!! Form::label('date_three','From: ') !!}
          </div>
       </div>
      <div class="col-md-6" style="margin-top:1pc">
          <div class="form-label-group">        
              <input type="text" name="th_to_date" id="date_four" class="form-control" placeholder="Date" required>
                {!! Form::label('date_four','To: ') !!}
          </div>
      </div>
  </div>


  <div class="row" style="margin-top:2pc">

      <div class="col-md-4">
        <div class="form-label-group">        
            <input type="text" class="form-control disable-input" value="Registration Date" required>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-label-group">        
            <input type="text" name="reg_fr_date" id="date_six" class="form-control" placeholder="Date" required>
            {!! Form::label('date_six','From: ') !!}
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-label-group">        
            <input type="text" name="reg_to_date" id="date_seven" class="form-control" placeholder="Date" required>
            {!! Form::label('date_seven','To: ') !!}
        </div>
      </div>
   </div>

  <div class="row" style="margin-top:2pc">
        <div class="col-md-6">
          <div class="form-label-group">        
              <input type="text" name="result" class="form-control disable-input" value="Result" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-label-group">        
              <input type="text" name="rs_date" id="date_five" class="form-control" placeholder="Date" required>
              {!! Form::label('date_five','Date: ') !!}
          </div>
       </div>

  </div>

    </div>

<div class="card-footer text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
       <a href="{{ asset('admin') }}" class="btn btn-info custom-btn btn-sm">Cancle</a>
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


</div>
      <!-- /.content-wrapper -->
</div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    
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

    <script src="{{URL::asset('js/moment.js')}}"></script>


    <!-- date picker -->
    <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'dd-mm-yy'   
           });  
           $(function(){  
                $("#date_one, #date_two, #date_three, #date_four, #date_five, #date_six, #date_seven").datepicker();

           });  
             
      });  
    </script>

<!-- date picker -->
    
  </body>

</html>
