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
                  <a class="nav-link" href="#projectstudent">Project Student List</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#all_user">User List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#result">Result</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#reg">Project Registration</a>
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

      <!-- Sidebar -->

      <ul class="sidebar navbar-nav">

      <!-- Search -->
      <input class="form-control" id="myInput" type="text" placeholder="Search..">


            @foreach($students as $student)

                <li id="myTable" class="bs-list"><a href="{{route('admin.index',$student->studentid)}}" 
                    class='sourcelink btn btn-info' name="name" id="bs-link">
                       {{$student->studentid}}
                    </a>

                </li>
            @endforeach   

 
      </ul>

<div id="content-wrapper" class="form-txt-three">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>


  <div class="card mb-3" style="margin-top: 30px">
            <div class="card-header" id="supervisorlist">
              <i class="fas fa-table"></i>
              Supervisor Information</div>
            <div class="card-body">

           <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->

              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                      <th>Supervisor Name:</th>
                      <th>Course Code:</th>                      
                      <th>semester</th>
                      <th>studentid one</th>
                      <th>studentid two</th>
                      <th>studentid three</th>
                      <th>View</th>
                    </tr>
                  </thead>

                @foreach($supervisorstudents as $supervisorstudent)
                  <tbody id="myTable2">
                    <tr>

                      <td>{{$supervisorstudent->supervisor_name}}</td>

                      <td>{{$supervisorstudent->course_code}}</td>

                      <td>{{$supervisorstudent->semester}}</td>

                      <td>{{$supervisorstudent->studentid_one}}</td>

                      <td>{{$supervisorstudent->studentid_two}}</td>

                      <td>{{$supervisorstudent->studentid_three}}</td> 
                      
                      <td><a href="{{route('admin.view_supervisor',$supervisorstudent->id)}}" class='btn btn-info btn-sm custom-btn' name="name" >View</a></td>
                    </tr>
                  </tbody>
                  @endforeach

                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>



   <div class="card mb-3" style="margin-top: 30px">
            <div class="card-header" id="projectstudent">
              <i class="fas fa-table"></i>
              Project Information</div>
            <div class="card-body">

           <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->

              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Project Name:</th>                  
                      <th>Course Code:</th>                    
                      <th>semester</th>
                      <th>studentid one</th>
                      <th>studentid two</th>
                      <th>studentid three</th>
                      <th>View</th>
                    </tr>
                  </thead>

                @foreach($posts as $post)
                  <tbody id="myTable2">
                    <tr>
                      
                      <td>{{$post->project_name}}</td>
                      
                      <td>{{$post->course_code}}</td>

 
                      <!-- <td><input type="text" name="personal_id" value="{{$post->personal_id}}"></td> -->
                      
                      <td>{{$post->semester}}</td>
                      <td>{{$post->studentid_one}}</td>
                      <td>{{$post->studentid_two}}</td>
                      <td>{{$post->studentid_three}}</td>
                      <td><a href="{{route('admin.view',$post->project_id)}}" class='btn btn-info btn-sm custom-btn' name="name" >View</a></td>
                    </tr>
                  </tbody>
                  @endforeach

                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>



<div id="reg" class="card">

      <div class="card-header col-md-12">
          Registrattion Information
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
      <div class="col-md-6">
        <div class="form-label-group">        

            <select name="course_code" class="form-control" id="exampleFormControlSelect1">

                <option>CSE-4041</option>
                <option>CSE-4042</option>
                <option>CSE-4043</option>
                <option>CSE-4044</option>

            </select>

        </div>
      </div>

      <div class="col-md-6">
          <div class="form-label-group">          

            <select name="semester" class="form-control" id="exampleFormControlSelect1">

                <option>SUMMER-2018</option>
                <option>FALL-2018</option>
                <option>SPRING-2018</option>

            </select>

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



      <!-- All Uder Data -->      
      <div class="card mb-3" style="margin-top: 15px;" id="all_user">
            <div class="card-header" id="all_user">
              <i class="fas fa-table"></i>
              All User Data</div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Personal ID</th>
                      <th>Name</th>
                      <th>View</th>
                     
                    </tr>
                  </thead>

                  @if($userlists)
                  @foreach($userlists as $userlist)
                  <tbody>
                    <tr>
                      <td>{{$userlist->personal_id}}</td>
                      <td>{{$userlist->name}}</td>
                      <td><a href="{{route('admin.edit',$userlist->id)}}" class='btn btn-info btn-sm custom-btn' name="name" >View</a></td>
                    </tr>
                  </tbody>
                  @endforeach
                  @endif

                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div> <!-- All Uder Data -->


<!-- Supervisor data form -->
     <div id="con" class="card">
        <div class="card-header col-md-12" id="add_supervisor">
            Supervisor Distribution
            <a href="#supervisorlist" class="btn btn-info btn-sm float-right custom-btn">View</a>
        </div>
  
  
  @if(Session::has('flash_message'))
          <div class="alert alert-success">
              {{ Session::get('flash_message') }}
          </div>
  @endif
  
  
  {!! Form::open(['id'=>'search_form','class'=>'search_form',     
      'method'=>'POST','action'=>'AdminController@store','files'=>true]) !!}
  
    
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-label-group">        
  
            {!! Form::text('start_input',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}
  
            {!! Form::label('start_id','Start ID: ') !!}
  
          </div>
        </div>
  
        <div class="col-md-6">
            <div class="form-label-group">          
  
              {!! Form::text('end_input',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}
  
              {!! Form::label('end_id','End Id: ') !!}
  
            </div>
        </div>
      </div>
  
        
  
    <div class="row" style="margin-top: 12px;">
        
      <div class="col-md-6">
  
          <div class="form-label-group">
  
            {!! Form::text('personal_id',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}
  
            {!! Form::label('personal_id','Supervisor ID: ') !!}
  
          </div>
  
      </div>
  
  
     <div class="col-md-6">
  
          <div class="form-label-group">
  
            {!! Form::text('supervisor_name',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}
  
            {!! Form::label('supervisor_name','Name: ') !!}
  
          </div>
  
      </div>
  
    </div>
    </div>
  
  
  <div class="card-footer text-right">
      <div class="btn-group" role="group" aria-label="Basic example">
         <a href="javascript:history.back()" class="btn btn-info custom-btn btn-sm custom-btn">Cancle</a>
           {!! Form::submit('Update',['class'=>'btn btn-info btn-sm custom-btn']) !!}
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
  
</div><!-- Supervisor data form -->
  
<div class="card mb-3" style="margin-top: 30px">
    <div class="card-header" id="result">
      <i class="fas fa-table"></i>
      Project Marking </div>
    <div class="card-body">

   <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->

      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Student ID</th>
              <th>Category One</th>
              <th>Category Two</th>
              <th>Supervisor</th>
              <th>Total</th>           
              <th>Update</th>
            </tr>

            <?php
              $a = array();
              $b = array();
              $sup = array();
            ?>
          </thead>



        @foreach($marks as $mark)

        <?php 
            if(!isset($a[$mark->student_id])) {
                  $a[$mark->student_id] = 0;
            }
            
            if(!isset($b[$mark->student_id])) {
                  $b[$mark->student_id] = 0;
            }
                    
            if(!isset($sup[$mark->student_id])) {
                  $sup[$mark->student_id] = $mark->supervisor_marks;
            }
            
            $a[$mark->student_id]++;

            $b[$mark->student_id] += $mark->total;
            
            $count = $a[$mark->student_id];
   
        ?>
        
          <tbody class="tbody">
            <tr>

              <td>
                  <input id="marks_input" class="form-control student_id" type="text" name="student_id[]" placeholder="Student ID" style="width:110px" value="{{$mark->student_id}}">
              </td>

              <td>
                  <input id="marks_input" class="form-control category_one" type="text" name="category_one[]" placeholder="Category One" style="width:100px" value="{{$mark->category_one}}">
              </td> 

              <td>
                  <input id="marks_input" class="form-control category_two" type="text" name="category_two[]" placeholder="Category Two" style="width:100px" value="{{$mark->category_two}}">
              </td> 

              <td>
                  <input id="marks_input" class="form-control supervisor_marks" type="text" name="supervisor_marks[]" style="background:white;width:110px";
                  value="{{$mark->supervisor_marks}}">
              </td> 

              <td>
                  <input id="marks_input" class="form-control total" type="text" name="total[]"
                  placeholder="Total Marks" style="background:white;cursor:default;width:100px" value="{{$mark->total}}" > 

              </td> 

              <td><a href="{{route('admin.view_mark',$mark->id)}}" class='btn btn-info btn-sm custom-btn' name="update" >Update</a></td>
            </tr>
          </tbody>

          @endforeach

        </table>
      </div>

      <div class="table-responsive">

        @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                  </div>
        @endif

          {!! Form::open(['id'=>'search_form','class'=>'search_form',     
          'method'=>'POST','action'=>'AdminController@store_final','files'=>true]) !!}
          
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Student ID</th>
              <th>Counter</th>
              <th>Final Mark</th>
            </tr>
          </thead>
        
          <tbody class="tbody">
          <?php 

          $keys = array_keys($a);

                for($i=0; $i < count($keys); ++$i) {              
                $avg = ($b[$keys[$i]] / $a[$keys[$i]]) + $sup[$keys[$i]];

          ?>      
             <tr>
              <td>
                  <input id="marks_input" class="form-control studentid" type="text" name="studentid[]" placeholder="Student ID" style="width:110px" value=<?php echo $keys[$i] ?>>
              </td>

              <td>
                  <input id="marks_input" class="form-control counter" type="text" name="counter[]" placeholder="Counter" style="width:100px" value=<?php echo  $a[$keys[$i]] ?>>
              </td>

              <td>
                  <input id="marks_input" class="form-control final_mark" type="text" name="final_mark[]" placeholder="Final Mark" style="width:100px" value=<?php echo $avg ?>>
              </td>

            </tr>
          </tbody>

        <?php  
        }
        
        ?>

        </table>

        
      </div>

    </div>

        <div class="card-footer text-right">
          <div class="btn-group" role="group" aria-label="Basic example">
              <input type="submit" class="btn btn-info custom-btn btn-sm" name="submit" value="Generate">
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>





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


        <!-- Search -->

        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable a").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });

        </script> 



    <script>
            $(document).ready(function(){
              $("#myInput2").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable2 td").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });

            
    </script> 

    <!-- Search -->


   <!-- <script type="text/javascript">
      
      $('.tbody').delegate('.total,.supervisor_marks','keyup',function(){

        var tr = $(this).parent().parent();
        var total = parseFloat(tr.find('.total').val());
        var supervisor_marks = parseFloat(tr.find('.supervisor_marks').val());
        var final = (total + supervisor_marks);
        tr.find('.final').val(final);
    });


    //var count = $('.student_id').length;
    //alert('Your have ' + count + ' student id in marking table.');

    </script>-->

  </body>

</html>
