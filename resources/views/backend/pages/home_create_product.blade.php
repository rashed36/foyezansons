@extends('backend.layoute.layoute')
@section('content')
  

        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Product Name</li>
        </ol>
          <div>
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('all_productname')}}"><h4>All Product Name</h4></a>
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
          <div class="" style="width: 400px">
            <form action="{{route('insurt_product_name_sub')}}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="input" name="name" required="name" placeholder="Name" id="name" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="short_description">Product Short Description</label>
                     <textarea name="short_description" id="short_description" cols="30" rows="10"></textarea>
                  </div>
                 <div class="form-group">
                <label for="pcontact">Photo(size= 200*200) Circular Frame</label>
                  <input type="file" name="images" required="images" placeholder="Photo" id="images" class="form-control"  />
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-news" value="Add Product" class="btn btn-primary pull-right" >
                  
                 </div>
             </form>
          </div>
        </div> 
      </div>
        @endsection