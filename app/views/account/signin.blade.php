@extends('layout.main')

@section('head')
		<title>Sign In</title>
@stop

@section('content')

		<div class="contact-us br-green text-center block">
			<!-- Container -->
			<div class="container">
				<!-- Page Title -->
				<div class="page-title">
					<!-- Header -->
					<h2>Sign in</h2>
					<h3>  </h3>
				</div>
				
				<div class="contact-two">
					<div class="row">

						<div class="col-md-6 col-sm-6">
							<!-- Contact Two Item -->
							<div class="contact-two-item">
								<!-- Header -->
								<!-- <h4>Login</h4> -->
								<!-- Form -->
								<form role="form" method="post" action="{{ URL::route('account-sign-in-post') }}">
									<!-- Form Group -->
									<div class="form-group">
										<!-- Input -->
										<input type="text" class="form-control input-lg" id="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" class="form-control input-lg" id="password" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="checkbox" class="btn btn-black btn-lg" id="remember" name="remember">
										<label for="remember">Remember Me</label>
									</div>
									<div class="form-group">
										<!-- Buttons -->
										{{ Form::token() }}
										<input type="submit" class="btn btn-default btn-lg" value="Submit">&nbsp;
									</div>
								</form>	
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<!-- Contact Two Item -->
							<div class="contact-two-item">
								<div class="form-group input-lg">VIEW EMAIL ERROR</div>
							</div>
							<div class="contact-two-item">
								<div class="form-group input-lg">VIEW PASSWORD ERROR</div>
							</div>
						</div>

					</div>


				</div>
			</div>
		</div>
@stop