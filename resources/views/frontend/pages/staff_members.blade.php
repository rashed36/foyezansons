@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection
@section('style')
<style>
.team-boxed {
    color: #000000;
    background-color: #fff
}

.team-boxed p {
    color: #000000
}

.team-boxed h2 {
    font-weight: bold;
    margin-bottom: 40px;
    padding-top: 40px;
    color: inherit
}

@media (max-width:767px) {
    .team-boxed h2 {
        margin-bottom: 25px;
        padding-top: 25px;
        font-size: 24px
    }
}

.team-boxed .intro {
    font-size: 16px;
    max-width: 500px;
    margin: 0 auto
}

.team-boxed .intro p {
    margin-bottom: 0
}

.team-boxed .people {
    padding: 50px 0
}

.team-boxed .item {
    text-align: center
}

.team-boxed .item .box {
    text-align: center;
    padding: 30px;
    background-color: rgb(242, 243, 244);
    margin-bottom: 30px;
    border-radius: 10px
}

.team-boxed .item .name {
    font-weight: bold;
    margin-top: 28px;
    margin-bottom: 8px;
    color: inherit
}

.team-boxed .item .title {
    text-transform: uppercase;
    font-weight: bold;
    color: #0a78e6;
    letter-spacing: 2px;
    font-size: 13px
}

.team-boxed .item .description {
    font-size: 15px
}

.team-boxed .item img {
    max-width: 160px
}

.fa {
    font-size: 28px
}

.intro h1 {
    color: #000000
}

.intro {
    margin-top: 23px
}

.box img {
    cursor: pointer;
    width: 9em
}
</style>
@endsection

@section('content')
<section class="contact-section">
    <div class="container align-items-center">
        <div class="team-boxed">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Meet our Staff</h2>
                </div>
                <div class="row people d-flex justify-content-center">
                    @foreach ($s_name as $s_name)
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box"><a href=""><img class="rounded-circle" data-bs-hover-animate="pulse" src="{{$s_name->image}}"></a>
                            <h3 class="name">{{$s_name->name}}</h3>
                            <p class="title">{{$s_name->position}}</p>
                            <p class="description"><br>{{$s_name->detils}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection