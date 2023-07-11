@extends('backend.layoute.layoute')
@section('content')
  

        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Product</li>
        </ol>
          <div>
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('all_photo')}}"><h4>All Product</h4></a>
          </div>
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="" style="">
            <form action="{{route('insurt_home_image')}}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                   <label for="catagery">Select Of Catagery Of Product</label>
                   <select name="catgory" class="form-control">
                     <option value="">Select Catagery</option>
                    @foreach($all_home_catagory as $row_all_home_catagory)
                       <option value="{{ $row_all_home_catagory->id }}">{{ $row_all_home_catagory->name }}</option>
                      @endforeach
                   </select>

                  </div>
                  <div class="form-group">
                    <label for="name">Product Name</label>
                      <input type="text" name="product_name" required="product_name" placeholder="Enter Product name" id="name" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="price">Product Price</label>
                      <input type="text" name="product_price" required="product_price" placeholder="Enter Product Price" id="price" class="form-control"  />
                  </div>
                 <div class="form-group">
                  <label for="pcontact">Photo(size= 850*530)</label>
                  <input type="file" name="image" required="photo" placeholder="Photo" id="pcontact" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea id ="y" class="form-control content" name="description"></textarea>
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-news" value="Add Product" class="btn btn-primary pull-right" >
                  
                 </div>
             </form>
          </div>
        </div> 
      </div>
        @endsection