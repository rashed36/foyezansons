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
{{--             <ul class="product-filter-menu">
                    <li><a href="{{route('home_products')}}">All Product</a></li>
                @foreach($product_name as $row_product_name)
                    <li><a href="{{route('home_products')}}">{{ $row_product_name->name }}</a></li>
                @endforeach
            </ul> --}}
            <div class="row">




 @foreach($product_name_v as $rowhome_image)              
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