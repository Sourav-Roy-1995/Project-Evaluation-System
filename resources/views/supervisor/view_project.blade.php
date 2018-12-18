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



    <!--Content Form -->

<div class="container">
    <section class="card" style="margin-top:100px">
        <div class="card-header col-md-12 ">
            Project Information
            <div class="text-right">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <a href="{{ asset('supervisor') }}" class="btn btn-info btn-sm float-right">Back</a>
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
