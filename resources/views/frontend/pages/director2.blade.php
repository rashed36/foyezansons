@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection
@section('style')
<style>

@media only screen and (min-width:1350px) and (max-width:1920px) {
    .dsfsdfsdf{ height: 460px;width: 100%; } ;
         } 
@media only screen and (min-width:992px) and (max-width:1349px) {
    .dsfsdfsdf{ height: 460px;width: 100%; } ;
         }  
@media only screen and (min-width:768px) and (max-width:991px) {
    .dsfsdfsdf{ height: 420px;width: 100%; } ;
         }  
@media only screen and (min-width:480px) and (max-width:767px) {
    .dsfsdfsdf{ height: 400px;width: 100%; } ;
         }  
@media only screen and (min-width:33px) and (max-width:479px) {
    .dsfsdfsdf{ height: 250px;width: 100%; } ;
         }  
}  

</style>
@endsection

@section('content')
<section class="">
    <div class="container align-items-center">
        <section class="product-filter-section" style="margin-top: 30px">
            <div class="container">
                <div class="row">
                    <div style="margin-top: 30px" class="col-lg-4 col-sm-4">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img class="dsfsdfsdf" src="{{asset('public/assets/frontend')}}/img/Director-2-Message-Section.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px" class="col-lg-8 col-sm-8">
                        <div class="product-item">
                            <div class="pi-pic">
                                <h2 style="font-size: 26pt;"><span style="color: #203351;">Md Jobayer Hossain</span></h2>
                                <h4 style="font-size: 18pt;"><span style="color: #203351;">Director</span></h4>
                                <p class="description">B.A: Bengali Literature (India) <br>M.A: Bengali Literature (India)</p>
                                <strong>Directors Message</strong>
                                <p class="" style="text-align: justify;">It is with a great sense of pride that I am able to introduce Foyez & Sons as one of the leading manufacturers and exporters of premier apparel products. With a vision to build a prominent presence in the world apparel market. </p>
                                <p class="" style="text-align: justify;">Foyez & Sons have instituted all necessary requirements to strengthen the entire manufacturing processes of the garment division of the organization, based on improved integration to achieve better synergy and a devoted focus on building and maintaining relationships with its customers, suppliers, principal, and employees. </p>
                                <p class="" style="text-align: justify;">As a business, we have a strong commitment to Corporate Social Responsibility which is our core value as well as the source of our pride as reflected in our organizational management, labour, and environmental practices.</p>
                                <p class="" style="text-align: justify;">I am optimistic that our sincerity, diligence, and resilience will drive the organization forward to emerge further as one of the most prominent organizations in the apparel sector and play a significant role in the socio-economic arena of the country with employment generation as well as its multi-dimensional business activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection