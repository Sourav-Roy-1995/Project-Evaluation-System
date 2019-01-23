@extends('includes.header')
@extends('includes.menu')


	<!-- Home -->

	<div class="home" style="height:180px;">

	</div>


	<div class="card mb-3" id="all_user">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Elligible Students
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Students Name</th>
                      <th>ID</th>
                      <th>Semester</th>
                    </tr>
                  </thead>

                  @if($posts)
                  @foreach($posts as $post)
                  <tbody>
                    <tr>
                      <td>{{$post->studentid}}</td>
                      <td>{{$post->studentname}}</td>
                      <td>{{$post->semester}}</td>
                    </tr>
                  </tbody>
                  @endforeach
                  @endif

                </table>
              </div>
            </div>
            
     </div>

	<!-- Popular -->


@extends('includes.footer')