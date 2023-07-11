@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')
    <!-- Product filter section -->
    <section class="product-filter-section" style="margin-top: 30px">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP SELLING PRODUCTS</h2>
            </div>
            <ul class="product-filter-menu">
                <li><a href="{{route('home_products')}}">WOMEN</a></li>
                <li><a href="{{route('home_men')}}">MEN</a></li>
                <li><a href="{{route('children')}}">Children</a></li>
                <li><a href="{{route('home_furnishings')}}">HOME FURNISHINGS</a></li>
                <li><a href="{{route('home_accessories')}}">ACCESSORIES</a></li>
            </ul>
            <div class="row">
 @foreach($home_furnishings as $rowhome_image)              
                <div style="margin-top: 30px" class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{URL::to($rowhome_image->image)}}" alt="">
                        </div>
                    </div>
                </div>
@endforeach
            </div>
            <div class="text-center pt-5">
                <button class="site-btn sb-line sb-dark">LOAD MORE</button>
            </div>
        </div>
    </section>
    <!-- Product filter section end -->
@endsection