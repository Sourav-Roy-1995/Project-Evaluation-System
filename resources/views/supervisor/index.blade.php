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

  
    </div><!-- end:colorlib-main -->
  </div><!-- end:container-wrap -->
</div><!-- end:colorlib-page -->






  
  <!-- MAIN JS -->
  <script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>

