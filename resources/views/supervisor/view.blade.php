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
            Marking System
            <div class="text-right">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <a href="{{ asset('supervisor') }}" class="btn btn-info btn-sm float-right">Back</a>
                </div>
            </div>
        </div>

        <div class="card-body">

            {!! Form::model($supervisorstudents,['method'=>'POST',
            'action'=>['SupervisorController@insert',$supervisorstudents->project_id],'files'=>true]) !!}
            
            {{csrf_field()}}
              <div class="row">

                <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                          <table class="table table-bordered table-responsive">
                                <thead>   
                                    <th>Teacher ID</th>                       
                                    <th>Student ID</th>
                                    <th>Category One</th>
                                    <th>Category Two</th>
                                    <th>Supervisor Marks</th>
                                    <th>Total</th>    
                                    <th>Remove</th>                                
                                </thead>

                                <tbody>
                                   <tr>
                                                                                  
                                            <input type="hidden" name="project_id[]" class="form-control" cursor="default" 
                                            style="background:white;" value="{{$supervisorstudents->project_id}}">
                                      
                                       <td>
                                            
                                        <input type="text" name="personal_id[]" class="form-control" style="width:130px" value="{{ Auth::User()->personal_id }}">

                                       </td>

                                       
                                            <input type="hidden" name="course_code[]" class="form-control" cursor="default" 
                                            style="background:white;" value="{{$supervisorstudents->course_code}}">
                                       

                                      
                                            <input type="hidden" name="semester[]" class="form-control" cursor="default" 
                                            style="background:white;" value="{{$supervisorstudents->semester}}">
                                       
                                       
                                      <td>

                                            <input class="form-control student_id" type="text" name="student_id[]" placeholder="Student ID" style="width:141px" value="{{$supervisorstudents->studentid_one}}">

                                           
                                      </td>
                                      <td>
                                          <input class="form-control category_one" type="text" name="category_one[]" placeholder="Category One" style="width:141px">
                                      </td>

                                      <td>
                                          <input class="form-control category_two" type="text" name="category_two[]" placeholder="Category Two" style="width:141px">
                                      </td>
                                      <td>
                                          <input class="form-control supervisor_marks" type="text" name="supervisor_marks[]" placeholder="Disabled" disabled="true" cursor="default" style="background:white;width:141px">
                                      </td>
                                      <td>
                                          <input class="form-control total" type="text" name="total[]"
                                          placeholder="Total Marks" style="background:white;cursor:default;width:141px">
                                      </td>

                                      <td>
                                          <a href="#" class="btn btn-danger btn-sm remove">Remove</a>
                                      </td>
                  
                                   </tr>
                                   
                                </tbody>

                          </table>

                      </div>
                </div>            

       </div>
    </div>

    <div class="card-footer text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ asset('supervisor') }}" class="btn btn-info custom-btn btn-sm">Cancle</a>
            <input type="submit" class="btn btn-info custom-btn btn-sm" name="submit" value="Submit">
        </div>
    </div>

    {!! Form::close() !!}

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



<script type="text/javascript">

    $('tbody').delegate('.student_id','change',function(){
        var tr = $(this).parent().parent();
        var id = tr.find('.student_id').val();
        var dataId={'id':id};
        $.ajax({
            type     : 'GET',
            url      : '{!!URL::route('marks_store')!!}',
            dataType : 'json',
            data     :  dataId,
            success:function(data){
                tr.find('.total').val(data.total);
            }
        });

    });
    $('tbody').delegate('.category_one,.category_two','keyup',function(){
            var tr = $(this).parent().parent();
            var category_one = parseFloat(tr.find('.category_one').val());
            var category_two = parseFloat(tr.find('.category_two').val());
            var total = (category_one + category_two);
            tr.find('.total').val(total);
    });
    window.onload = function addRow(){
         std_three = "{{$supervisorstudents->studentid_three}}"
         std_two = "{{$supervisorstudents->studentid_two}}"
            
        if(std_two > 1 && std_three==""){
      var tr='<tr>'+
                  '<input type="hidden" name="project_id[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->project_id}}">'+
                  '<td><input type="text" name="personal_id[]" class="form-control" style="width:130px" value="{{ Auth::User()->personal_id }}"></td>'+
                  '<input type="hidden" name="course_code[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->course_code}}">'+
                  '<input type="hidden" name="semester[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->semester}}" >'+
                  '<td>'+
                  '<input class="form-control student_id" type="text" name="student_id[]" placeholder="Category Two" style="width:141px" value="{{$supervisorstudents->studentid_two}}">'+
                  '</td>'+
                  '<td><input class="form-control category_one" type="text" name="category_one[]" placeholder="Category One"></td>'+

                  '<td><input class="form-control category_two" type="text" name="category_two[]" placeholder="Category Two"></td>'+
                  '<td><input class="form-control supervisor_marks" type="text" name="supervisor_marks[]" disabled="true" cursor="default" style="background:white" placeholder="Disabled"></td>'+
                  '<td><input class="form-control total" type="text" name="total[]"  placeholder="Total Marks" style="background:white;cursor:default"></td>'+
                  '<td><a href="#" class="btn btn-danger btn-sm remove">Remove</a></td>'+      
                  '</tr>';

        $('tbody').append(tr);
        }

     else if(std_two > 1 && std_three!=""){
      var tr='<tr>'+
                  '<input type="hidden" name="project_id[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->project_id}}">'+
                  '<td><input type="text" name="personal_id[]" class="form-control" style="width:130px" value="{{ Auth::User()->personal_id }}"></td>'+
                  '<input type="hidden" name="course_code[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->course_code}}">'+
                  '<input type="hidden" name="semester[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->semester}}" >'+
                  '<td>'+
                  '<input class="form-control student_id" type="text" name="student_id[]" placeholder="Category Two" style="width:141px" value="{{$supervisorstudents->studentid_two}}">'+
                  '</td>'+
                  '<td><input class="form-control category_one" type="text" name="category_one[]" placeholder="Category One"></td>'+

                  '<td><input class="form-control category_two" type="text" name="category_two[]" placeholder="Category Two"></td>'+
                  '<td><input class="form-control supervisor_marks" type="text" name="supervisor_marks[]" disabled="true" cursor="default" style="background:white" placeholder="Disabled"></td>'+
                  '<td><input class="form-control total" type="text" name="total[]"  placeholder="Total Marks" style="background:white;cursor:default"></td>'+
                  '<td><a href="#" class="btn btn-danger btn-sm remove">Remove</a></td>'+      
                  '</tr>'+
                  
                  '<tr>'+
                  '<input type="hidden" name="project_id[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->project_id}}">'+
                  '<td><input type="text" name="personal_id[]" class="form-control" style="width:130px" value="{{ Auth::User()->personal_id }}"></td>'+
                  '<input type="hidden" name="course_code[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->course_code}}">'+
                  '<input type="hidden" name="semester[]" class="form-control" cursor="default" style="background:white;" value="{{$supervisorstudents->semester}}" >'+
                  '<td>'+
                  '<input class="form-control student_id" type="text" name="student_id[]" placeholder="Student ID" style="width:141px" value="{{$supervisorstudents->studentid_three}}">'+
                  '</td>'+
                  '<td><input class="form-control category_one" type="text" name="category_one[]" placeholder="Category One"></td>'+

                  '<td><input class="form-control category_two" type="text" name="category_two[]" placeholder="Category Two"></td>'+
                  '<td><input class="form-control supervisor_marks" type="text" name="supervisor_marks[]" disabled="true" cursor="default" style="background:white" placeholder="Disabled"></td>'+
                  '<td><input class="form-control total" type="text" name="total[]"  placeholder="Total Marks" style="background:white;cursor:default"></td>'+
                  '<td><a href="#" class="btn btn-danger btn-sm remove">Remove</a></td>'+      
                  '</tr>';

        $('tbody').append(tr);
        }

        sp_id   = "{{$supervisorstudents->personal_id}}"
        user_id = "{{ Auth::User()->personal_id }}"
        
        if(sp_id == user_id ){
            $(".supervisor_marks").prop('disabled', false).attr("placeholder", "Enabled");
        }
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
