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
                    <li><a href="{{route('home_products')}}">All Product</a></li>
                @foreach($product_name as $row_product_name)
                    <li><a href="{{ Route('home_products_v',$row_product_name->id) }} ">{{ $row_product_name->name }}</a></li>
                @endforeach
            </ul>
            <div class="row">

 @foreach($home_image as $rowhome_image)              
 <div class="col-lg-3 col-sm-6">
    <div class="product-item">
        <div class="pi-pic">
            {{-- <div class="tag-sale">ON SALE</div> --}}
            <a href="{{ Route('single_product',$rowhome_image->id) }}"><img src="{{URL::to($rowhome_image->image)}}" alt=""></a>
            <div class="pi-links">
                <a class="wishlist-btn">${{$rowhome_image->Product_price}}</a>
            </div>
        </div>
        <div class="pi-text">
            <h6><a style="color: black;" href="{{ Route('single_product',$rowhome_image->id) }}">Detils</a></h6>
            <p>{{$rowhome_image->product_name}}</p>
            {{-- <a class="btn btn-success" href="#">Detils</a> --}}
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