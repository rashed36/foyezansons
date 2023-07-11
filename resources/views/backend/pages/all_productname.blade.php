@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Member</li>
        </ol>
         <div>
           <a href="{{route('home_create_product')}}"><h3 class="btn btn-primary">Add Product Name</h3></a>
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
                    <th>Photo</th>
                    <th>Product Description</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Product Description</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($all_productname as $rowall_productname)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowall_productname->name}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($rowall_productname->images)}}" alt=""></td>
                    <td>{{$rowall_productname->short_description}}</td>
                    <td>
                      <br>
                      <a href="{{ URL::to('update_photo_p_name/'.$rowall_productname->id)}}" class="btn btn-xs btn-info" id="update"><i class="fa fa-edit"></i> Edit</a>
                      <a href="{{ URL::to('delete_photo_p_name/'.$rowall_productname->id)}}" class="btn btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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