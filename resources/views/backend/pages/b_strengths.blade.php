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
           <a href="{{ URL::to('/edit-b-strengths/'.$b_strengths->id)}}"><h3 class="btn btn-primary">Edit Contact Us</h3></a>
            <div style="margin-top: 30px" >
              {!! $b_strengths->textbox !!}
            </div>
      </div>
      <!-- /.container-fluid -->
@endsection