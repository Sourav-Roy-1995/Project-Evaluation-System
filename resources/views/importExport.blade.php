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

        <!-- Fonts-->
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

    <link rel="stylesheet" href="{{ asset('css/admin-css/css/main.css') }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


  </head>

<body class="bg">     

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="custom-nav">

        <a class="navbar-brand dept-font" href="http://localhost/final_year_project/public">Dept. Of CSE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        </div>

      </nav>

<div id="content-wrapper">
        <div class="container-fluid form-txt-three">


                        <div id="std-con" class="card">

                                <div class="card-header col-md-12">
                                  Student List For Project
                                  <a href="{{url('/admin')}}" class="btn btn-info btn-sm float-right custom-btn">Back</a>
                                </div>
            
            
                       <form  action="{{ url('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            
                            @csrf
            
            
                            @if ($errors->any())
            
                                <div class="alert alert-danger">
            
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">??</a>
            
                                    <ul>
            
                                        @foreach ($errors->all() as $error)
            
                                            <li>{{ $error }}</li>
            
                                        @endforeach
            
                                    </ul>
            
                                </div>
            
                            @endif
            
             
            
                            @if (Session::has('flash_message'))
            
                                <div class="alert alert-success">
            
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">??</a>
            
                                    <p>{{ Session::get('flash_message') }}</p>
            
                                </div>
            
                            @endif
                                <div class="card-body">
                                        <div class="row">
            
                                            <div class="col-md-12">
            
                                                <div class="form-group">
                                                    <div class="form-label-group">
            
                                                        <input type="file" name="import_file" id="name" >
                                                        <label for="import_file">File</label>
            
                                                    </div>
                                                </div>
            
                                            </div>
            
                                        </div>
            
                                </div>
                                <div class="card-footer text-right">
            
                                  <div class="btn-group" role="group" aria-label="Basic example">
                         <a href="{{ asset('admin') }}" class="btn btn-info custom-btn btn-sm custom-btn">Cancle</a>           
                         <a  class="btn btn-info btn-sm custom-btn" href="{{ url('downloadExcel/xls') }}"> Download XLS</a>
            
                        <a  class="btn btn-info btn-sm custom-btn" href="{{ url('downloadExcel/xlsx') }}">Download XLSX</a>
            
                        <a class="btn btn-info btn-sm custom-btn" href="{{ url('downloadExcel/csv') }}">Download CSV</a>
                                        
                                        <button type="submit" class="btn btn-info btn-sm custom-btn" >Import File</button>
                                    </div>
                                </div>
                        </form>
            
            
                    </div>
            



    </div>
</div>


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

  </body>

</html>