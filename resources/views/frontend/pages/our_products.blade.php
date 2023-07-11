@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')
<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2><b>OUR PRODUCTS</b></h2>
        </div>
        <div class="row">
            @foreach($product_name as $rowproduct_name) 
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="checkout-cart">
                    <ul class="product-list">
                        <li>
                                <div class="pl-thumb"><img src="{{ $rowproduct_name->images }}" alt="p image"></div>
                                <h6 style="color: #020202;">{{ $rowproduct_name->name }}</h6>
                                <p style="text-align: justify; font-size: 8pt;">{{ $rowproduct_name->short_description }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>
@endsection