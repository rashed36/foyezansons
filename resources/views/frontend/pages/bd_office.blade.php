@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')
{{-- <section class="contact-section">
    <img src="{{asset('public/assets/frontend')}}/img/uk-office.png" alt="Flag">
    <div class="map"><iframe src="https://maps.google.com/maps?q=40%20Bursland%20Road,Enfiled,EN37EX,London&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0" allowfullscreen=""></iframe></div>
</section> --}}

<section class="product-filter-section" style="margin-top: 30px">
    <div class="container">

        <div class="row">
            <div style="margin-top: 30px" class="col-lg-6 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/assets/frontend')}}/img/bd-office.png" alt="">
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px" class="col-lg-6 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                            <iframe style="width: 100%; height: 340px" src="https://maps.google.com/maps?q=House%2025,%20Road%2001,Block-F,Bannasree,%20Rumpura,%20Dhaka-%201219,%20Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0" allowfullscreen=""></iframe>    
                    </div>
                </div>
            </div>

        </div>

        @foreach ($bd_of as $bd_of)
        <div class="row">
        
            <div style="margin-top: 30px" class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{$bd_of->images}}" alt="">
                        <strong style="text-align: center;">{{$bd_of->name}}</strong>
        
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px" class="col-lg-9 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <p>{!! $bd_of->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection