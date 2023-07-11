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
           <a href="{{route('home_office_info')}}"><h3 class="btn btn-primary">Add office Info</h3></a>
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
                    <th>Location</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Posation</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Location</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Posation</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>


@foreach($all_office as $rowall_office)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowall_office->location}}</td>
                    <td>{{$rowall_office->name}}</td>
                    <td><img style="width: 150px; height: 150px;" class="img-thumbnail" src="{{URL::to($rowall_office->images)}}" alt=""></td>
                    <th>|{!!$rowall_office->posation!!}</th>
                    <td>
                      <br>
                      <a href="{{ URL::to('edit_office_info/'.$rowall_office->id)}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i> Edit</a>
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