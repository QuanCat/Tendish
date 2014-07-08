@extends('layout.main')

@section('head')
		<title>Contact Us</title>
@stop

@section('content')

		<div class="contact-us br-red text-center block">
			<!-- Container -->
			<div class="container">
				<!-- Page Title -->
				<div class="page-title">
					<!-- Header -->
					<h2>Contact - Us</h2>
					<h3>Ut enim <strong>ad minim</strong>, quis nostrud <strong>laboris nisi</strong> ut aliquip.</h3>
				</div>
				
				<!-- Contact One -->
				
				<div class="contact-one">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<!-- Contact One Item -->
							<div class="contact-one-item">
								<!-- Header -->
								<h6>Address</h6>
								<!-- Paragraph -->
								<p>#1/89,A Gandhi Street,</p>
								<p>BTM layout,</p>
								<p>Bangalore - 68.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- Contact One Item -->
							<div class="contact-one-item">
								<h5>Email</h5>
								<p><a href="mailto:contact_info@gmail.com">contact_info@gmail.com</a></p>
								<h5>Phone</h5>
								<p>+(484) 4342 552</p> 
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="contact-one-item">
								<!-- Header -->
								<h6>Social Links</h6>
								<p>Aute irure dolor reprehenderit voluptat velit.</p> 
								<!-- Social -->
								<div class="social">
									<!-- Social Icons -->
									<a href="#" class="social-icon"> <i class="fa fa-facebook"></i> </a>
									<a href="#" class="social-icon"> <i class="fa fa-twitter"></i> </a>
									<a href="#" class="social-icon"> <i class="fa fa-google-plus"></i> </a>
									<a href="#" class="social-icon"> <i class="fa fa-linkedin"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Contact Two -->
				
				<div class="contact-two">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<!-- Contact Two Item -->
							<div class="contact-two-item">
								<iframe src="https://maps.google.com/?ie=UTF8&amp;ll=36.173634,-115.148048&amp;spn=0.078431,0.169086&amp;t=m&amp;z=13&amp;output=embed"> </iframe>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<!-- Contact Two Item -->
							<div class="contact-two-item">
								<!-- Header -->
								<h4>Contact US</h4>
								<!-- Form -->
								<form role="form" method="post" action="{{ URL::route('contact') }}">
									<!-- Form Group -->
									<div class="form-group">
										<!-- Input -->
										<input type="text" class="form-control input-lg" id="Enter-name" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control input-lg" id="Enter-Email-id" placeholder="Email">
									</div>
									<div class="form-group">
										<!-- Textarea -->
										<textarea class="form-control input-lg" rows="9" placeholder="Comments"></textarea>	
										<!-- Buttons -->
										{{ Form::token() }}
										<input type="submit" class="btn btn-default btn-lg" value="Submit">&nbsp;
										<input type="reset" class="btn btn-black btn-lg" value="Clear">
									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop