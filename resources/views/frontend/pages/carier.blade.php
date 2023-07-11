@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')
<section class="contact-section">
    <div class="container align-items-center">
        <div class="row ">
            <div class="col-lg-12 contact-info ">
                <h3><b>Drop Your Resume</b></h3>
                @if (Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>
                    
                @endif
                <form class="contact-form" action="{{route('send_carrier')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" placeholder="Title">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="text" name="ins" placeholder="University/College/School Name">
                    <input type="text" name="education" placeholder="Highest Education Qualification">
                    <input type="text" name="phone" placeholder="Phone">
                    <input type="email" name="email" placeholder="Email">
                    <input type="date" name="dob" placeholder="Date of Birth">
                    <input type="text" name="natinality" placeholder="Nationality">
                    <input type="file" name="file" placeholder="Upload Your CV">
                    <button type="submit" class="btn btn-primary"> SUBMIT </button>
                </form>
            </div>
        </div>
    </div>
</section>
<br>
<br>

@endsection