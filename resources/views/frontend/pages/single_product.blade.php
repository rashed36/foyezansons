@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')
<section class="product-section">
    @foreach ($p_name as $p_name)
<div class="container">
<div class="back-link">
<a href="category.html"> &lt;&lt; Back to Category</a>
</div>
<div class="row">
<div class="col-lg-6">
<div class="">
<img class="product-big-img" src="{{URL::to($p_name->image)}}" alt="">
</div>
</div>
<div class="col-lg-6 product-details">
<h2 class="p-title">{{$p_name->product_name}}</h2>
<h3 class="p-price">${{$p_name->Product_price}}</h3>
<h4 class="p-stock">Available: <span>In Stock</span></h4>

<div id="accordion" class="accordion-area">
<div class="panel">
<div class="panel-header" id="headingOne">
<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
</div>
<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
<div class="panel-body">
<p>{!!$p_name->Product_detils!!}</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endforeach
</section>

@endsection