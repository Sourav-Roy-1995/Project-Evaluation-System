
@extends('includes.header')
@extends('includes.menu')

	

	<!-- Contact -->

<div class="container-fluid" style="margin-top: 150px;">
  
  <div class="card mb-3">
            <div class="card-header" id="supervisorlist">

              <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                      <i class="fas fa-table"></i>
                      Supervisor Information
                  </div>
      
                  <div class="col-md-6 col-sm-6 col-xs-4">                 
                      <input class="input_field search"  id="search_inputs" placeholder="search..." type="text">
                  </div>
              </div>
            </div>

            <div class="card-body">

           <!--  <input float="left" class="form-control" id="myInput2" type="text" placeholder="Search.."> -->

              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Project ID</th>
                      <th>Supervisor</th>
                      <th>Course Code</th>                      
                      <th>semester</th>
                      <th>Student ID</th>
                      <th>Student ID</th>
                      <th>Student ID</th>
                    </tr>
                  </thead>

                @foreach($supervisorstudents as $supervisorstudent)
                  <tbody id="search_list">
                    <tr>
                      <td>{{$supervisorstudent->project_id}}</td>
              

                      <td>{{$supervisorstudent->supervisor_name}}</td>                   

                      <td>{{$supervisorstudent->course_code}}</td>

                      <td>{{$supervisorstudent->semester}}</td>

                      <td>{{$supervisorstudent->studentid_one}}</td>

                      <td>{{$supervisorstudent->studentid_two}}</td>

                      <td>{{$supervisorstudent->studentid_three}}</td>
                      
                    </tr>
                  </tbody>
                  @endforeach

                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
</div>
    



@extends('includes.footer')
<script src="bower_components/jquery/dist/jquery.min.js"></script>


<!-- Search -->
<script>
    $(document).ready(function(){
      $("#search_inputs").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#search_list tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script> 
<!-- Search -->