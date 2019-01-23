
@extends('includes.header')
@extends('includes.menu')

	

	<!-- Contact -->

<div class="container-fluid" style="margin-top: 150px;">
  
  <div class="card mb-3">
            <div class="card-header" id="supervisorlist">
              <i class="fas fa-table"></i>
              Supervisor Information</div>
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
                  <tbody id="myTable2">
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