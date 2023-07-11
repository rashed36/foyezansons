@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All product</li>
        </ol>
         <div>
           <a href="{{route('home_image')}}"><h3 class="btn btn-primary">Add Product</h3></a>
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
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Description</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($all_photo as $rowall_photo)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($rowall_photo->image)}}" alt=""></td>
                    <td>{{$rowall_photo->product_name}}</td>
                    <td>{{$rowall_photo->Product_price}}</td>
                    <td>{!!$rowall_photo->Product_detils!!}</td>
                    <td>
                      <br>
                      <a href="{{ URL::to('edit_product/'.$rowall_photo->id)}}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i> Edit</a>
                      <a href="{{ URL::to('delete_photo/'.$rowall_photo->id)}}" class="btn btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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