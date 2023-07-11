@extends('backend.layoute.layoute')
@section('content')
  
        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Slider</li>
        </ol>
          <div>
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('all_slider')}}"><h4>All Slider</h4></a>
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
            <form action="{{route('add_slider')}}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="name" id="title" required="title" placeholder="Enter Slider Title" class="form-control">
                  </div>
                 <div class="form-group">
                <label for="slider">Photo(size= 1320*720)</label>
                  <input type="file" name="images" required="photo" placeholder="Photo" id="slider" class="form-control"  />
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-slider" value="Add Slider" class="btn btn-primary pull-right" >
                  
                 </div>
             </form>
          </div>
        </div> 
      </div>
        @endsection