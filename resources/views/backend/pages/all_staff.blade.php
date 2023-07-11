@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Staff</li>
        </ol>
         <div>
           <a href="{{route('staff')}}"><h3 class="btn btn-primary">Add Staff</h3></a>
         </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($all_staff as $all_staff)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$all_staff->name}}</td>
                    <td>{{$all_staff->position}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($all_staff->image)}}" alt=""></td>
                    <td>{{$all_staff->detils}}</td>
                    <td>
                      <br>
                      <a href="{{ URL::to('delete_staff/'.$all_staff->id)}}" class="btn btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                  </tr>

@endforeach









                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection