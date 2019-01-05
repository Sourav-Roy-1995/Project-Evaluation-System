@extends('includes.header')


<div class="container" style="margin-top: 160px;">
    <div class="row">

        @foreach($pre_projects as $pre_project)
           <div class="col-md-12">
             <div class="box box-default" style="margin-bottom:50px;">
               <div class="box-header with-border">
                 <h3 class="box-title">{{$pre_project->project_title}}</h3>
       
                 <!-- /.box-tools -->
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                     <tbody class="table-bordered">
                       <tr>                                
                           <th>Student Name:</th> 
                           <td>{{$pre_project->name}}</td>
                       </tr> 
                       <tr>                                
                           <th>Project Type:</th> 
                           <td>{{$pre_project->project_type}}</td>
                       </tr> 
                       <tr>                                
                           <th>Framework:</th> 
                           <td>{{$pre_project->framework}}</td>
                       </tr> 
       
                       <tr>                                
                           <th>Description:</th> 
                           <td>{{$pre_project->project_txt}}</td>
                       </tr> 

                       <tr>                                
                        <th>Image:</th> 
                        <td><img class="card-img-body" src="{{asset('images/'.$pre_project->project_img)}}" alt="Owl Image"></td>
                       </tr> 
                    </tbody>
                 </table>
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
           </div>
           @endforeach
       
         </div>

</div>


















@extends('includes.footer')