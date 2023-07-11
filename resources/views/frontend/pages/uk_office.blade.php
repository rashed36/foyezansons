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
    @foreach ($uk_of as $uk_of)
    <div class="container">
           
                <h2 style="text-align: center;"><u><b>{{$uk_of->location}}</b></u></h2>

        <div class="row">
            
           
            <div style="margin-top: 30px" class="col-lg-3 col-sm-4">
                <div class="product-item">
                    <div class="pi-pic">
                        <img style="width: 100%; height: 250px;" class="" src="{{$uk_of->images}}" alt="">
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px" class="col-lg-4 col-sm-4">
                <div class="product-item">
                    <div class="pi-pic">
                        <h2 style="font-size: 25pt;"><span style="color: #203351;"><b>{{$uk_of->name}}</b></span></h2>
                        <h4 style="font-size: 17pt;"><span style="color: #203351;"><b>{{$uk_of->posation}}</b></span></h4>
                        <p class="description"><b>Phone: </b>{{$uk_of->phone}}</p>
                        <p class="description"><b>Email: </b>{{$uk_of->email}}</p>
                        <p class="description"><b>Address: </b><br>{{$uk_of->address}}</p>
                    </div>
                </div>
            </div>
             <div style="margin-top: 30px" class="col-lg-5 col-sm-4">
                <div class="product-item">
                    <div class="pi-pic">
                        <iframe style="width: 100%; height: 250px"  src="{{$uk_of->map_link}}" style="border:0" allowfullscreen=""></iframe>    
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <br>
    @endforeach
</section>
@endsection
