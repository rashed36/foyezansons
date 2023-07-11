@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('style')
<style>

@media only screen and (min-width:1350px) and (max-width:1920px) {
    .dsfsdfsdf{ height: 700px } ;
         } 
@media only screen and (min-width:992px) and (max-width:1349px) {
    .dsfsdfsdf{ height: 600px } ;
         }  
@media only screen and (min-width:768px) and (max-width:991px) {
    .dsfsdfsdf{ height: 500px } ;
         }  
@media only screen and (min-width:480px) and (max-width:767px) {
    .dsfsdfsdf{ height: 260px } ;
         }  
@media only screen and (min-width:33px) and (max-width:479px) {
    .dsfsdfsdf{ height: 150px } ;
         }  

.readMoreBtn {
  background-color: #eeeeee; /* Green */
  border: 1px solid;
  color: rgb(0, 0, 0);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  padding: 8px 16px;
}  

</style>
@endsection

@section('content')
    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            
            @foreach($slider as $sliders) 
                <div class="dsfsdfsdf hs-item set-bg" data-setbg="{{ $sliders->images }}">
                    <div class="container">
                        <div class="container">
                            <div class="row pt-5">
                                    <h2 style=" padding-left: 10px; padding-right: 10px; text-transform: none; font-weight: 300px; color:#fff; background: rgba(0,0,0,0.5);">{{ $sliders->title }}</h2>
                            </div>
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->

    <section class="product-filter-section" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div style="margin-top: 30px; border-right: 2px solid #8cc43b" class="col-lg-6 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="pt-4">
                                <h1 style="font-size: 30px; color: #0d73bb!important; text-align: center;"><b>Welcome to Foyez & Sons</b></h1>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div style="margin-top: 30px" class="col-lg-6 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <p class="pt-4" style="text-align: justify;"><strong>Foyez & Sons</strong> the world’s leading manufacturers and suppliers of textiles and apparel</p>
                        </div>
                        <a href="{{route('company_profile')}}"><div class="pt-3">
                            <button class="readMoreBtn">READ MORE</button>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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
    

    <!-- Features section -->

@endsection