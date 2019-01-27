@extends('includes.header')
@extends('includes.menu')


	<!-- Home -->

	<div class="home" style="height:180px;">

	</div>


	<div class="card mb-3" id="all_user">
            <div class="card-header">

              <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-2 default-panel-head personal_project" >
                      <i class="fas fa-table"></i>
                      Elligible Students
                  </div>
      
                  <div class="col-md-6 col-sm-6 col-xs-4">                 
                      <input class="input_field search" id="search_inputs" placeholder="search..." type="text">
                  </div>
              </div>
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
                  <tbody id="search_list">
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