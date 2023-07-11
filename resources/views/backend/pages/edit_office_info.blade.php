@extends('backend.layoute.layoute')
@section('content')
  
        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
        </ol>
          <div>
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('all_office_info')}}"><h4>All Office Information</h4></a>
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
            <form action="{{ URL::to('update_office_info/'.$edit_office_info->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="office_name">Add Office Location</label>
                <input type="text" name="location" value="{{$edit_office_info->location}}" placeholder="Enter Office Location" required="location" class="form-control">
               </div>
               <div class="form-group">
                 <label for="name">Name</label>
                 <input type="text" name="name" value="{{$edit_office_info->name}}" id="name" placeholder="Enter Name" required="name" class="form-control">
              </div>
              <div class="form-group">
                 <label for="posation">Posation</label>
                 <input type="text" name="posation" value="{{$edit_office_info->posation}}" id="posation" placeholder="Enter Posation" class="form-control">
              </div>
              <div class="form-group">
                 <label for="phone">Phone</label>
                 <input type="text" name="phone" value="{{$edit_office_info->phone}}" id="phone" placeholder="Enter phone Number" class="form-control">
              </div>
              <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" name="email" value="{{$edit_office_info->email}}" id="email" placeholder="Enter email" class="form-control">
              </div>
              <div class="form-group">
                 <label for="pcontact">Photo(size= 850*530)</label>
                 <input type="file" name="images" required="photo" value="{{$edit_office_info->images}}" placeholder="Photo" id="pcontact" class="form-control"  />
               </div>
               <div class="form-group">
                 <label for="map_link">Map Link</label>
                 <input type="text" name="map_link" value="{{$edit_office_info->map_link}}" id="map_link" placeholder="https://google-map-generator.com/ and place address" class="form-control">
              </div>
              <div class="form-group">
               <label for="address">Address</label>
               <input type="text" name="address" value="{{$edit_office_info->address}}" id="address" placeholder="Enter address" class="form-control">
            </div>
                 <div class="form-group">
                  <input type="submit" name="add_office_info" value="Update Office Info" class="btn btn-primary pull-right" >
                 </div>
             </form>
          </div>
        </div> 
      </div>
        @endsection