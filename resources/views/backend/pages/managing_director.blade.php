@extends('backend.layoute.layoute')
@section('content')
  

        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Manageing Director</li></li>
        </ol>
          <div>
            <a class="btn btn-primary" style="margin-right: 10px" href="{{route('all_managing_Director')}}"><h4>All Director</h4></a>
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
            <form action="{{route('add_managing_Director')}}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" required="name" placeholder="Name" id="name" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="poasition">Position</label>
                    <input type="text" name="poasition" required="poasition" placeholder="Position" id="poasition" class="form-control"  />
                  </div>
                  <div class="form-group">
                    <label for="education">Education</label>
                     <textarea name="education" id="education" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="director_msg">Message</label>
                     <textarea name="director_msg" id="director_msg" cols="30" rows="10"></textarea>
                  </div>
                 <div class="form-group">
                <label for="pcontact">Photo</label>
                  <input type="file" name="image" required="image" placeholder="Photo" id="image" class="form-control"  />
                  </div>
                 <div class="form-group">
                  <input type="submit" name="add_director" value="Submit" class="btn btn-primary pull-right" >
                  
                 </div>
             </form>
          </div>
        </div> 
      </div>
        @endsection