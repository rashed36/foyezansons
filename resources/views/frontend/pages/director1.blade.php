@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection
@section('style')
<style>

@media only screen and (min-width:1350px) and (max-width:1920px) {
    .dsfsdfsdf{ height: 580px;width: 100%; } ;
         } 
@media only screen and (min-width:992px) and (max-width:1349px) {
    .dsfsdfsdf{ height: 490px;width: 100%; } ;
         }  
@media only screen and (min-width:768px) and (max-width:991px) {
    .dsfsdfsdf{ height: 510px;width: 100%; } ;
         }  
@media only screen and (min-width:480px) and (max-width:767px) {
    .dsfsdfsdf{ height: 510px;width: 100%; } ;
         }  
@media only screen and (min-width:33px) and (max-width:479px) {
    .dsfsdfsdf{ height: 350px;width: 100%; } ;
         }  
}  

</style>
@endsection

@section('content')
<section class="">
    <div class="container align-items-center">
        <section class="product-filter-section" style="margin-top: 30px">
            <div class="">
                    <div class="row">
                        <div style="margin-top: 30px" class="col-lg-4 col-sm-4">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img class="dsfsdfsdf" src="{{URL::to($director_of->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px" class="col-lg-8 col-sm-8">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <h2 style="font-size: 26pt;"><span style="color: #203351;">{{$director_of->name}}</span></h2>
                                    <h4 style="font-size: 18pt;"><span style="color: #203351;">{{$director_of->poasition}}</span></h4>
                                    <p class="description">{!!$director_of->education!!}</p>
                                    <p>{!!$director_of->director_msg!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
</section>

@endsection