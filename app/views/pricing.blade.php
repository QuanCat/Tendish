@extends('layout.main')

@section('head')
		<title>Features</title>
@stop

@section('content')
		<div class="pricing br-black text-center block">
			<!-- Container -->
			<div class="container">
				<!-- Page Title -->
				<div class="page-title">
					<h2>Pricing</h2>
					<h3><strong>Price</strong> Details</h3>
				</div>
				
				<!-- Table Responsive -->
				
				<div class="table-responsive">
					<!-- Table -->
					<table class="table table-bordered">
						<!-- Table Row -->
						<tr>
							<!-- Table Header -->
							<th>Products</th> 
							<th>Basic</th>
							<th>Medium</th>
							<th>Premium</th>
						</tr>
						<!-- Table Row -->
						<tr>
							<!-- Table Data -->
							<td> 
								<h4><span class="br-red td-icon animated"> <i class="fa fa-user"></i> </span>Security</h4>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit pariatur.</p>
							</td>
							<td> <i class="fa fa-check green"></i> </td> 
							<td> <i class="fa fa-times red"></i> </td>
							<td> <i class="fa fa-check green"></i> </td> 
						</tr>
						<tr>
							<td> 
								<h4><span class="br-blue td-icon animated"> <i class="fa fa-laptop"></i> </span>Reliable</h4>
								<p>Excepteur sint occaecat cupidatat non proident culpa quiof.</p>
							</td>
							<td> <i class="fa fa-times red"></i> </td>
							<td> <i class="fa fa-check green"></i> </td>
							<td> <i class="fa fa-times red"></i> </td>
						</tr>
						<tr>
							<td> 
								<h4><span class="br-pink td-icon animated"> <i class="fa fa-cog"></i> </span>Useability</h4>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit pariatur.</p>
							</td>
							<td> <i class="fa fa-times red"></i> </td>
							<td> <i class="fa fa-check green"></i> </td>
							<td> <i class="fa fa-check green"></i> </td>
						</tr>
						<tr>
							<td>
								<h4><span class="br-green td-icon animated"> <i class="fa fa-star-o"></i> </span>Flexibility</h4>
								<p>Excepteur sint occaecat cupidatat non proident culpa quiof.</p>
							</td>
							<td> <i class="fa fa-check green"></i> </td>
							<td> <i class="fa fa-times red"></i> </td>
							<td> <i class="fa fa-check green"></i> </td>
						</tr>
						<tr>
							<td>
								<h4><span class="br-orange td-icon animated"> <i class="fa fa-desktop"></i> </span>Auditability</h4>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit pariatur.</p>
							</td>
							<td> <i class="fa fa-times red"></i> </td>
							<td> <i class="fa fa-check green"></i> </td>
							<td> <i class="fa fa-check green"></i> </td>
						</tr>
						<tr>
							<td></td>
							<td class="br-red">$ 5 /m</td>
							<td class="br-lblue">$ 10 /m</td>
							<td class="br-green">$ 15 /m</td>
						</tr>	
						<tr>
							<td></td>
							<td><a href="#" class="btn btn-danger">Buy Now</a></td>
							<td><a href="#" class="btn btn-info">Buy Now</a></td>
							<td><a href="#" class="btn btn-success">Buy Now</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
@stop