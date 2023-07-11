@extends('backend.layoute.layoute')
@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">About</li>
        </ol>
           <a href="{{ URL::to('/edit-about-us/'.$see_about_us->id)}}"><h3 class="btn btn-primary">Edit About Us</h3></a>
            <div style="margin-top: 30px" >
              {!! $see_about_us->textbox !!}
            </div>
      </div>
      <!-- /.container-fluid -->
@endsection