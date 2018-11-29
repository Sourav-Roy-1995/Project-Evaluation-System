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
  

<body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">

          <a class="navbar-brand" href="http://localhost/final_year_project/public">Dept. Of CSE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav mr-auto nav-list list-inline mx-auto justify-content-center">

                <li class="nav-item ">
                  <a class="nav-link" href="importExport">Add Students</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#con">Add Supervisor</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="index2">Project Student List</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="add_business.php">Final Year Student List</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#all_user">User List</a>
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

    <!--Content Form -->

<div class="container">
    <section class="panel">
       <div class="panel panel-footer">
          <header class="panel panel-default">
              <h1>Mark Sheet</h1>
          </header>
       </div>
       <div class="panel panel-footer">
          {!! Form::model($supervisorstudents,['method'=>'POST','action'=>['SupervisorController@store', $supervisorstudents->project_id],'files'=>true]) !!}

              <div class="row">
                  <div class="col-lg-3">
                      <div class="form-group">
                          
                          {!! Form::label('project_id','Project Id: ') !!}
                          {!! Form::text('project_id',null,['class'=>'form-control','disabled'=>'true','cursor'=>'default','style'=>'background:white;']) !!}
                        
                          
                      </div>
                  </div>

                  <div class="col-lg-3">
                      <div class="form-group">

                          {!! Form::label('personal_id','Teacher ID: ') !!}
                          <input type="text" name="personal_id" class="form-control" disabled="true" cursor="default" style="background:white;" value="{{ Auth::User()->personal_id }}">
                        
                      </div>
                  </div>

                  <div class="col-lg-3">
                      <div class="form-group">
                          {!! Form::label('course_code','Course Code: ') !!}
                          {!! Form::text('course_code',null,['class'=>'form-control','disabled'=>'true','cursor'=>'default','style'=>'background:white;']) !!}
                      </div>
                  </div>

                  <div class="col-lg-3">
                      <div class="form-group">
                           {!! Form::label('semester','Semester: ') !!}
                           {!! Form::text('semester',null,['class'=>'form-control','disabled'=>'true','cursor'=>'default','style'=>'background:white;']) !!}
                      </div>
                  </div>

              </div>

                <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                          <table class="table table-bordered">
                                <thead>
                                    <th>Student ID</th>
                                    <th>Category One</th>
                                    <th>Category Two</th>
                                    <th>Supervisor Marks</th>
                                    <th>Total</th>  
                                    <th>
                                        <a href="#" class="btn btn-info btn-sm addRow">Add</a>
                                    </th>                                 
                                </thead>

                                <tbody>
                                   <tr>
                                      <td>

                                           <select name="student_id[]" class="form-control">
                                              <option value="0" selected="true" disabled="true">Student ID:</option>
                                              <option>{{$supervisorstudents->studentid_one}}</option>
                                              <option>{{$supervisorstudents->studentid_two}}</option>
                                              <option>{{$supervisorstudents->studentid_three}}</option>
                                           </select>
                                           
                                      </td>
                                      <td>
                                          <input class="form-control" type="text" name="category_one[]" placeholder="Category One">
                                      </td>

                                      <td>
                                          <input class="form-control" type="text" name="category_two[]" placeholder="Category Two">
                                      </td>
                                      <td>
                                          <input class="form-control" type="text" name="supervisor_marks[]" placeholder="Supervisor Marks">
                                      </td>
                                      <td>
                                          <input class="form-control" type="text" name="total[]" disabled="true" 
                                          placeholder="Total Marks" style="background:white;cursor:default">
                                      </td>

                                      <td>
                                          <a href="#" class="btn btn-danger btn-sm remove">Remove</a>
                                      </td>
                  
                                   </tr>
                                </tbody>

                          </table>
                      </div>
                </div>

          {!! Form::close() !!}

          @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
          @endif
       </div>
    </section>
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



<script type="text/javascript">
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow(){
      var tr='<tr>'+
                  '<td>'+
                  '<select name="student_id[]" class="form-control">'+
                  '<option value="0" selected="true" disabled="true">Student ID:</option>'+
                  '<option>{{$supervisorstudents->studentid_one}}</option>'+
                  '<option>{{$supervisorstudents->studentid_two}}</option>'+
                  '<option>{{$supervisorstudents->studentid_three}}</option>'+
                  '</select>'+
                  '</td>'+
                  '<td><input class="form-control" type="text" name="category_one[]" placeholder="Category One"></td>'+

                  '<td><input class="form-control" type="text" name="category_two[]" placeholder="Category Two"></td>'+
                  '<td><input class="form-control" type="text" name="supervisor_marks[]" placeholder="Supervisor Marks"></td>'+
                  '<td><input class="form-control" type="text" name="total[]" disabled="true" placeholder="Total Marks" style="background:white;cursor:default"></td>'+
                  '<td><a href="#" class="btn btn-danger btn-sm remove">Remove</a></td>'+      
                  '</tr>';

        $('tbody').append(tr);
    };
    $('body').delegate('.remove','click',function(){
        var l = $('tbody tr').length;
        if(l==1){
            alert("You can not remove last one...");
        }else{
          $(this).parent().parent().remove();
        }
    });
</script>



  </body>

</html>
