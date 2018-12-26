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

    <!-- Date Format -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

          <!-- Fonts-->
          <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>

          <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Charm|Staatliches" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Charm|Lobster|Staatliches" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin-css/css/main.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
   

</head>

  <body>

  <div id="colorlib-page">
    <div class="container-wrap">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target=".navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
      <div class="text-center">
        <div class="author-img" ></div>
        <h1 id="colorlib-logo" ><a href="#" class="dept-font">{{ Auth::User()->name }}</a></h1>
        <span class="position faculty-txt"><a style="color:#004A43!important" href="#">Faculty</a>,Leading University</span>
      </div>
      <nav id="colorlib-main-menu" role="navigation" class="navbar">
        <div class="navbar" class="collapse">
          <ul class="form-txt-two">
            <li class="active"><a href="{{ asset('/') }}" data-nav-section="home">Home</a></li>
            <li><a href="#" data-nav-section="about">About</a></li>
            <li><a href="#personal" data-nav-section="personal_project">Personal Project</a></li>
            <li class="dropdown"><a href="#all" data-toggle="dropdown" data-nav-section="project_list">All Project</a></li>



            <li><a href="#marking" data-nav-section="education">Marking</a></li>
            <li><a href="#" data-nav-section="experience">Experience</a></li>
            <li><a href="#" data-nav-section="work">Work</a></li>
            <li><a href="#" data-nav-section="blog">Blog</a></li>
            <li><a href="#" data-nav-section="contact">Contact</a></li>
            
          </ul>
        </div>
      </nav>

    </aside>

  <div id="colorlib-main" class="form-txt-three">

    <!--Content Form -->

    <div class="container">
        <section class="card" style="margin-top:100px">
            <div class="card-header col-md-12 ">
                Project Information
                <div class="text-right">
                    <div class="btn-group " role="group" aria-label="Basic example">
                        <a href="{{ asset('supervisor') }}" class="btn btn-info btn-sm float-right custom-btn">Back</a>
                    </div>
                </div>
            </div>
    
            <div class="card-body">
                
                {{csrf_field()}}
                  <div class="row">
    
                    <div class="col-lg-12 col-sm-12">
                          <div class="form-group">
                              <table class="table table-responsive">
    
    
                                    <tbody class="table-bordered ">
                                       <tr>                                
                                            <th>Project Name</th> 
                                            <td>{{$personalstudents->project_name}}</td>
                                       </tr> 
                                       <tr>                                
                                            <th>Description</th> 
                                            <td>{{$personalstudents->description}}</td>
                                       </tr> 
                                       <tr>                                
                                            <th>Semester</th> 
                                            <td>{{$personalstudents->semester}}</td>
                                       </tr> 
                                       <tr>                                
                                            <th>Students</th> 
                                            <td>
                                            {{$personalstudents->studentid_one}}<br>
                                            {{$personalstudents->studentid_two}}<br>
                                            {{$personalstudents->studentid_three}}</td>
                                       </tr>     
                                    </tbody>
    
                              </table>
    
                          </div>
                    </div>            
    
           </div>
        </div>
    
        <div class="card-footer text-right">
            
        </div>
    
    
        @if(Session::has('flash_message'))
          <div class="alert alert-success">
              {{ Session::get('flash_message') }}
          </div>
        @endif
    
        </section>
    </div> 
  
    </div><!-- end:colorlib-main -->
  </div><!-- end:container-wrap -->
</div><!-- end:colorlib-page -->





  
      <!-- MAIN JS -->
      <script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/main.js"></script>


      <!-- Waypoints -->
      <script src="{{URL::asset('js/jquery.waypoints.min.js') }}"></script>

      <!-- Counters -->
      <script src="{{URL::asset('js/jquery.countTo.js') }}"></script>
      <script src="{{URL::asset('js/profile.js') }}"></script>

      <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



  </body>
</html>

