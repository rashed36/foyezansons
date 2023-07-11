@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Slider</li>
        </ol>
         <div>
           <a href="{{route('home_slider')}}"><h3 class="btn btn-primary">Add Slider image</h3></a>
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
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($all_slider as $rowall_slider)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowall_slider->title}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($rowall_slider->images)}}" alt=""></td>
                    <td>
                      <br>
                      <a href="{{ URL::to('delete_slider/'.$rowall_slider->id)}}" class="btn btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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