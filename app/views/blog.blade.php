@extends('layout.main')

@section('head')
		<title>Blog</title>
@stop

@section('content')

	<!-- Blog Starts -->
		
			<div class="blog br-white black">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<!-- Posts -->
							<div class="posts">
								<!-- Post One -->
								<div class="entry">
									<h2><a href="blog-single.html">Temporibus autem quibusdam officiis debitis aut rerum necessitatibus</a></h2>
									<!-- Meta Deatils -->
									<div class="meta br-green">
										<i class="fa fa-calendar-o"></i> 30-11-2013 <i class="fa fa-user"></i> User <i class="fa fa-folder-open"></i> <a href="#">Open</a> <span class="pull-right"> <i class="fa fa-comment-o"></i> <a href="#">Comment</a></span>
									</div>
									<!-- Thumbnail -->
									<div class="bthumb">
										<a href="#"><img src="img/blog/1.jpg" alt=" " class="img-responsive" /></a>
									</div>
									<!--Paragraph -->
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium volu deleniti atque corrupti quos dolores et quas molestias excepturi sint <a href="#"><span>occaecati cupiditate</span></a> non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga he master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
									<!-- Button -->
									<a href="#" class="btn btn-info">Read More</a>
								</div>
								<!-- Post Two -->
								<div class="entry">
									<h2><a href="#">These cases are perfectly simple and easy to distinguish.</a></h2>
									<!-- Meta Deatils -->
									<div class="meta br-red">
										<i class="fa fa-calendar-o"></i> 30-11-2013 <i class="fa fa-user"></i> User <i class="fa fa-folder-open"></i> <a href="#">Open</a> <span class="pull-right"> <i class="fa fa-comment-o"></i> <a href="#">Comment</a></span>
									</div>
									<!-- Thumbnail -->
									<div class="bthumb">
										<a href="#"><img src="img/blog/2.jpg" alt=" " class="img-responsive" /></a>
									</div>
									<!--Paragraph -->
									<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae which is the same as saying <a href="#"><span>through shrinking</span></a> from he master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. toil and pain occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
									<!-- Button -->
									<a href="#" class="btn btn-info">Read More</a>
								</div>
								<!-- Pagenation -->
								<div class="paging">
									<span class="current">1</span>
									<a href="#">2</a>
									<span class="dots">&hellip;</span>
									<a href="#">8</a>
									<a href="#">Next</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- Sidebar -->
							<div class="sidebar">
							<!-- Header -->
							<h4 class="br-lblue"> <i class="fa fa-search"></i> SEARCH</h4>
								<!-- Widget -->
								<div class="widget">
									<!-- Form -->
									<form class="form-inline">
										<!--Form Group -->
										<div class="form-group">
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<!-- Button -->
											<a href="#" class="btn btn-info">Read More</a>
										</div>
									</form>
								</div>
								<h4 class="br-pink"> <i class="fa fa-gift"></i> RECENT POSTS</h4>
								<!-- Widget -->
								<div class="widget">
									<ul>
										<li><a href="#">Totam rem aperiam, eaque ipsa quae</a></li>
										<li><a href="#">Similique sunt in culpa qui</a></li>
										<li><a href="#">Which of us ever undertakes</a></li>
										<li><a href="#">Temporibus autem quibusdam et aut officiis</a></li>
										<li><a href="#">Quis autem vel eum iure</a></li>
									</ul>
								</div>
								<h4 class="br-orange"> <i class="fa fa-user"></i> ABOUT US</h4>
								<!-- Widget -->
								<div class="widget">
									<p>Temporibus autem quibusdam et aut officiis debitis aut rerum <a href="#"><span>sapiente delectus ut aut</span></a>necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
									<div class="social">
										<!-- Icons -->
										<a href="#" class="social-icon"> <i class="fa fa-facebook"></i> </a>
										<a href="#" class="social-icon"> <i class="fa fa-twitter"></i> </a>
										<a href="#" class="social-icon"> <i class="fa fa-google-plus"></i> </a>
										<a href="#" class="social-icon"> <i class="fa fa-linkedin"></i> </a>
									</div>
								</div>
								<h4 class="br-purple"> <i class="fa fa-tags"></i> Tag </h4>
								<!-- Widget -->
								<div class="widget">
									<a href="#" class="btn btn-primary btn-lg">Variations Passages </a>&nbsp;
									<a href="#" class="btn btn-info btn-lg">Classical</a>&nbsp;
									<a href="#" class="btn btn-danger btn-lg">Predefined</a>&nbsp;
									<a href="#" class="btn btn-pink btn-lg">embarrassing</a>&nbsp;
									<a href="#" class="btn btn-warning btn-lg">Publishing</a>&nbsp;
									<a href="#" class="btn btn-success btn-lg">Generated</a>&nbsp;
									<a href="#" class="btn btn-violet btn-lg">Hampden-Sydney</a>&nbsp;
									<a href="#" class="btn btn-black btn-lg">Accompanied</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Blog Ends -->
@stop