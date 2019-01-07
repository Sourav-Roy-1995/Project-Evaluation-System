<?php
  use App\User;
  use App\ProjectList;
  use App\StudentList;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dept. Of CSE| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Fonts-->
  <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Charm|Staatliches" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Charm|Lobster|Staatliches" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 


  <link rel="stylesheet" href="css/profile.css">

  <style rel="stylesheet">
      #marks_input{
        pointer-events: none;
      }
  </style>

  
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ asset('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dept.</b>Of CSE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-envelope"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        CSE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-bell"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-flag"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::User()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                    {{ Auth::User()->name }} - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::User()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" id="myInput" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-tachometer-alt"></i> <span>Student List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu"  id="myTable">
              @foreach($students as $student)
              <li class="bs-list"><a href="#" name="name" id="bs-link"><i class="fas fa-user-circle"></i> 
                {{$student->studentid}}</a></li>
              @endforeach   
          </ul>

        </li>

        <li>
            <a href="{{ asset('/') }}" >
              <i class="fa fa-th"></i> <span>Home</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
              </span>
            </a>
        </li>
        <li class="">
          <a href="importExport">
            <i class="fa fa-th"></i>
            <span>Add Students</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
            </span>
          </a>
        </li>
         <li>
            <a href="#add_supervisor" >
              <i class="fa fa-th"></i> <span>Add Supervisor</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
              </span>
            </a>
          </li>

          <li>
              <a href="#projectstudent" >
                <i class="fa fa-th"></i> <span>Project List</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
                </span>
              </a>
            </li>

            <li>
                <a href="#all_user" >
                  <i class="fa fa-th"></i> <span>User List</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
                  </span>
                </a>
              </li>

              <li>
                  <a href="#result" >
                    <i class="fa fa-th"></i> <span>Result</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
                    </span>
                  </a>
              </li>

              <li>
                  <a href="#reg" >
                    <i class="fa fa-th"></i> <span>Registration</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
                    </span>
                  </a>
              </li>

              <li>
                  <a href="scheduling" >
                      <i class="fa fa-th"></i> <span>Scheduling</span>
                      <span class="pull-right-container">
                        <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
                      </span>
                  </a>
              </li>

              <li>
                <a href="view_schedule" >
                    <i class="fa fa-th"></i> <span>View Schedule</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-green"><i class="fas fa-hand-point-right"></i></small>
                    </span>
                </a>
            </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fas fa-chart-line"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{StudentList::all()->count('studentid') }}</h3>

              <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ProjectList::all()->count('project_id') }}</h3>

                <p>Total Project</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


      <!-- Main row -->
      <div class="row">

          <div id="add_supervisor" class="panel panel-info custom-panel form-txt" style="margin-top: 30px">
              <div class="panel-heading panel-info" id="personal">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
                        Supervisor Information
                    </div>
        
                    <div class="col-md-6 col-sm-6 col-xs-4">                 
                        <input class="input_field search"  id="myInput2" placeholder="search..." type="text">
                    </div>
                </div>
              </div>
                
              <div class="panel-body table-responsive">
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
              <div class="panel-footer custom-panel-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


          <div id="projectstudent" class="panel panel-info custom-panel form-txt" style="margin-top: 30px">
              <div class="panel-heading panel-info" id="all">
  
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
                        Project Information
                   </div>
        
                    <div class="col-md-6 col-sm-6 col-xs-4">                 
                        <input class="input_field search"  id="myInput3" placeholder="search..." type="text">
                    </div>
                </div>

  
              </div>
                
              <div class="panel-body table-responsive">
  
             <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->
  
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
              <div class="panel-footer custom-panel-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


          <div id="reg" class="panel panel-info custom-panel form-txt" style="margin-top: 30px">
              <div class="panel-heading panel-info" id="marking">
  
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
                        Registrattion Information
                   </div>
        
                    <div class="col-md-6 col-sm-6 col-xs-4">                 
                        <input class="input_field search"  id="myInput" placeholder="search..." type="text">
                    </div>
                </div>
  
              </div>


              @if(Session::has('flash_message'))
                      <div class="alert alert-success">
                          {{ Session::get('flash_message') }}
                      </div>
              @endif

          {!! Form::open(['id'=>'search_form','class'=>'search_form',     
          'method'=>'POST','action'=>'AdminController@store_three','files'=>true]) !!}
                
              <div class="panel-body">
  
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
              <div class="panel-footer custom-panel-footer text-right">
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


          <div id="all_user" class="panel panel-info custom-panel form-txt" style="margin-top: 30px">
              <div class="panel-heading panel-info" id="all">
  
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
                        All User Data
                   </div>
        
                    <div class="col-md-6 col-sm-6 col-xs-4">                 
                        <input class="input_field search"  id="myInput3" placeholder="search..." type="text">
                    </div>
                </div>
              </div>
                
              <div class="panel-body table-responsive">
  
             <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->
  
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
              <div class="panel-footer custom-panel-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div> <!-- All Uder Data -->



     <!-- Supervisor data form -->
      <div class="panel panel-info custom-panel form-txt" style="margin-top: 30px">
              <div class="panel-heading panel-info" id="all">
  
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
                        Supervisor Distribution
                   </div>
        
                    <div class="col-md-6 col-sm-6 col-xs-4">                 
                        <input class="input_field search"  id="myInput3" placeholder="search..." type="text">
                    </div>
                </div>
              </div>


              @if(Session::has('flash_message'))
              <div class="alert alert-success">
                  {{ Session::get('flash_message') }}
              </div>
              @endif
      
      
      {!! Form::open(['id'=>'search_form','class'=>'search_form',     
          'method'=>'POST','action'=>'AdminController@store','files'=>true]) !!}
                
            <div class="panel-body">
             <div class="row">
                <div class="col-md-6">
                  <div class="form-label-group">        
                    
                    {!! Form::label('start_id','Start ID: ') !!}
                    {!! Form::text('start_input',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}                 
                  </div>
                </div>
          
                <div class="col-md-6">
                    <div class="form-label-group">                             
                      {!! Form::label('end_id','End Id: ') !!}
                       {!! Form::text('end_input',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}
                    </div>
                </div>
              </div>
          
                
          
            <div class="row" style="margin-top: 12px;">
                
              <div class="col-md-6">
          
                  <div class="form-label-group">
                    {!! Form::label('personal_id','Supervisor ID: ') !!}
                    {!! Form::text('personal_id',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}        
                  </div>
          
              </div>
          
          
             <div class="col-md-6">
          
                  <div class="form-label-group">
                    
                    {!! Form::label('supervisor_name','Name: ') !!}
                    {!! Form::text('supervisor_name',null,['class'=>'form-control','required'=>'required','data-error'=>'Input is required.']) !!}

                  </div>
          
              </div>
          
            </div>
              
              </div>
              <div class="panel-footer custom-panel-footer text-right">
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
          </div> <!-- Supervisor data form -->



      <div id="result" class="panel panel-info custom-panel form-txt" style="margin-top: 30px">
              <div class="panel-heading panel-info" id="all">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                        <span class="glyphicon glyphicon-th" aria-hidden="true" ></span>
                        Project Marking 
                   </div>
                    <div class="col-md-6 col-sm-6 col-xs-4">                 
                        <input class="input_field search"  id="myInput3" placeholder="search..." type="text">
                    </div>
                </div>
              </div>
                
              <div class="panel-body">
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
                              <input id="marks_input" class="form-control student_id" type="text" name="student_id[]" placeholder="Student ID" style="background:white;width:120px" value="{{$mark->student_id}}">
                          </td>
            
                          <td>
                              <input id="marks_input" class="form-control category_one" type="text" name="category_one[]" placeholder="Category One" style="background:white;width:100px" value="{{$mark->category_one}}">
                          </td> 
            
                          <td>
                              <input id="marks_input" class="form-control category_two" type="text" name="category_two[]" placeholder="Category Two" style="background:white;width:100px" value="{{$mark->category_two}}">
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
                                <input id="marks_input" class="form-control studentid" type="text" name="studentid[]" placeholder="Student ID" style="background:white;width:120px" value=<?php echo $keys[$i] ?>>
                            </td>
              
                            <td>
                                <input id="marks_input" class="form-control counter" type="text" name="counter[]" placeholder="Counter" style="background:white;width:100px" value=<?php echo  $a[$keys[$i]] ?>>
                            </td>
              
                            <td>
                                <input id="marks_input" class="form-control final_mark" type="text" name="final_mark[]" placeholder="Final Mark" style="background:white;width:100px" value=<?php echo $avg ?>>
                            </td>
              
                          </tr>
                        </tbody>
              
                      <?php  
                      }
                      
                      ?>
          
                  </table> 
              </div>                      
          </div>
                    <div class="panel-footer custom-panel-footer text-right">
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
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Developed By <a href="https://www.linkedin.com/in/sourav-roy-a2a489135/">Sourav Roy</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<!-- Search -->
<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable li a").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });


    $(document).ready(function(){
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable2 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(document).ready(function(){
      $("#myInput3").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable3 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });



</script> 


</body>
</html>
