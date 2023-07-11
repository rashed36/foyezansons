@extends('backend.layoute.layoute')
@section('content')
  

        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Staff</li>
        </ol>
          <div>
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('all_staff')}}"><h4>All Staff</h4></a>
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
            <form action="{{route('add_staff')}}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                    <label for="name">Staff Name</label>
                    <input type="text" name="name" required="name" placeholder="Name" id="name" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="name">Staff Position</label>
                    <input type="text" name="position" required="position" placeholder="Staff Position" id="name" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="detils">Staff Short Description</label>
                     <textarea name="detils" id="detils" cols="30" rows="10"></textarea>
                  </div>
                 <div class="form-group">
                <label for="pcontact">Staff Photo(size= 400*400)</label>
                  <input type="file" name="image" required="image" placeholder="Photo" id="image" class="form-control"  />
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-news" value="Add Staff" class="btn btn-primary pull-right" >
                  
                 </div>
             </form>
          </div>
        </div> 
      </div>
        @endsection