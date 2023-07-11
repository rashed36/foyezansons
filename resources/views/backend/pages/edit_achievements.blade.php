@extends('backend.layoute.layoute')
@section('content')
 <!-- doctor adds -->
<div class="container" >
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand btn btn-primary" style="color: white" href="{{route('achievements')}}">page view</a>
      <a class="navbar-brand" href="{{route('home')}}">Dashboard</a>
    </nav>
  </div><hr>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <div class="col-sm-12" style="margin-top: 20px"  >
     <div class="col-sm-10 align-content-center "  >
     <form action="{{ URL::to('update-achievements/'.$edit_achievements->id)}}" method="post" enctype="multipart/form-data" >
      @csrf
       <!-----------------pseodo text area-------->
       <textarea id="php_post_text" name="php_post_text" placeholder="blog Description" class="form-control " style="display:none;"></textarea>
       <!----------------MAIN TEXT EDITOR-------->
      <textarea id ="y" class="form-control content" name="update_achievements">{{$edit_achievements->textbox}}</textarea>
      <!---------------ON SUBMIT ASIGN VALUE OF PSEOUDO TEXT AREA WITH TEXT EDITOR-------->
      <input style="margin-top: 15px" type="submit"  value="Update" class="btn btn-info " name="save_text" onclick="$('#php_post_text').val($('.content').val());">
    </form> 
    </div>
  </div>
</div>       
<!-- end doctor adds -->
@endsection