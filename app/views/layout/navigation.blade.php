		<header>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4"> 
						<!-- Logo -->
						<div class="logo">
							<h1><a href="{{ URL::route('home') }}"> <i class="fa fa-cloud"></i> Tendish</a></h1>
						</div>
					</div>
					<div class="col-md-8 col-sm-8">
						<!-- Navigation -->
						<div class="navi">
							<!-- Menu --> 
							<div id="ddtopmenubar" class="mattblackmenu">
								<!-- UnorderedList -->
								<ul>
									<!-- List -->
									<li><a href="{{ URL::route('home') }}">Home</a></li>
									<li><a href="#" rel="ddsubmenustyle">Pages<span class="caret"></span></a>
										<!-- Dropdown Submenu Style -->
										<ul id="ddsubmenustyle" class="ddsubmenustyle">
											<li><a href="{{ URL::route('features') }}">Features</a></li>
											<li><a href="{{ URL::route('portfolio') }}">Portfolio</a></li>
											<li><a href="{{ URL::route('product') }}">Product</a></li>
											<li><a href="{{ URL::route('testimonials') }}">Testimonials</a></li>
											<li><a href="{{ URL::route('pricing') }}">Pricing</a></li>
											<li><a href="{{ URL::route('blog') }}">Blog</a></li>
										</ul>
									</li>
									<li><a href="{{ URL::route('service') }}">Service</a></li>
									<li><a href="{{ URL::route('about') }}">About</a></li>
									<li><a href="{{ URL::route('contact') }}">Contact</a></li>
									<li><a href="{{ URL::route('account-sign-in') }}">Sign in</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Dropdown NavBar -->
					<div class="navis"></div>
				</div>
			</div>
		</header>