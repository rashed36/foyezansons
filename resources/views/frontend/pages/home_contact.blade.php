@extends('frontend.layout.index')
@section('title')
Divisima | eCommerce Template
@endsection

@section('content')

<section class="top-letest-product-section">
	<div class="container">
		<div class="container">
			<p style="font-size: 20px; color: black; text-align: center;"><b>For Inquiries, Information, Investment and Business Opportunities.</b></p>
		</div>
	
		<div class="row pt-4">
			<div class="col-xl-6 col-md-6 mb-4">
				<div class="container" >
					<h2><b>Head Office</b></h2><br>
					<p><b>South Africa Office Address: </b>40 Mint Road, Fordsburg 
						<br>Johannesburg,2093, South Africa<br>
						<b>Phone:</b> +27 684 179 531 <br>
						<b>Email:</b> info@foyezandsons.co.za
					</p>
				</div>
			</div>


			<div class="col-xl-6 col-md-6 mb-4">
				<div class="container" >
					<h2><b>Liaison Office</b></h2><br>
					<p><b>Bangladesh Office Address: </b>House # 25, Road # 01
						Block # F, Banasree, Rampura, Dhaka, 1219, Bangladesh<br>
						<b>Phone:</b> +880 171 331 3599<br>
						<b>Email:</b> asia@foyezandsons.co.za
					</p>
				</div>
				</div>
			</div>
		</div>
		<div class="container text-center">
			<a href="{{route('world_wide_office')}}"><div class="text-center pt-3 d-flex justify-content-center">
				<button style="font-size: 20px;" class="site-btn sb-dark">WORLDWIDE OFFICE LOCATOR</button>
			</div></a>
		</div>
		
	</div>
</section>

<div class="container" style="margin-top: 40px; margin-bottom: 100px" >
	
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	
	<div class="col-sm-12">
		<h2><b>Message Us</b></h2>
		<br>
		@if (Session::has('message_sent'))
			<div class="alert alert-success" role="alert">
				{{Session::get('message_sent')}}
			</div>
		@endif
		<form action="{{ route('message_submit') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
		</div>
		<div class="form-group">
			<label for="phone">Phone</label>
			<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number">
		</div>
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="test" name="subject" class="form-control" id="subject" placeholder="Message Title">
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Message</label>
			<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="Send" value="Submit" class="btn btn-primary pull-right" >
			</div>
		</form>
	</div>
</div>
@endsection