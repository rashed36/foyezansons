@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Office Info</li>
        </ol>
         <div>
            <div>
                <a href="{{route('managing_Director')}}"><h3 class="btn btn-primary">Add Director</h3></a>
              </div>
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
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>SL.</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>


@foreach($all_director as $rowall_director)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowall_director->name}}</td>
                    <td>{{$rowall_director->poasition}}</td>
                    <td><img style="width: 150px; height: 150px;" class="img-thumbnail" src="{{URL::to($rowall_director->image)}}" alt=""></td>
                    <td>
                      <br>
                      <a href="{{ URL::to('edit_managing_Director/'.$rowall_director->id)}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i> Edit</a>
                      <a href="{{ URL::to('delete_managing_Director/'.$rowall_director->id)}}" class="btn btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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