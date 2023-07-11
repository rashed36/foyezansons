@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')
<section class="contact-section">
    <div class="container align-items-center">
        <div style="padding-left: 10px; padding-right: 10px;" class="row ">
            <p><strong><u>WORK WITH US</u></strong></p>
            <br>
            <div style="padding-left: 30px;" class="container">
                <ul>
                    <li>Send us a detailed description of your order.</li>
                    <li>Identifying the proper manufacturer based on requirements.</li>
                    <li>Our sales team will process your order with the design team and the manufacturing
                        manager for the feasibility of your order. After all of the parts are validated, we shall
                        email you the detailed quotation.
                    </li>
                    <li>Once the quotation is approved, your order’s first sample will be made and sent to you.</li>
                    <li>After the sample approval, your order will be sent to production.</li>
                    <li>As soon as your order is done, we will deliver it to you.</li>
                </ul>
            </div>
        </div>
        <br>
        <a href="{{route('home_contact')}}"><div class="text-center pt-3 d-flex justify-content-center">
            <button class="site-btn sb-dark">TO WORK WITH US PLEASE CONTACT US HERE</button>
        </div></a>
        <br><br>
    </div>
</section>

@endsection