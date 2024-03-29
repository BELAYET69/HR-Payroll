


@extends('index')

@section('content')



	<!-- Breadcrumbs Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>BLOG</h1>
					<p>Latest News</p>
				</div>	<!-- End of /.col-md-4 -->	
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="#">Home</a></li>
					  	<li class="active">Blog</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->


	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9 clearfix">
					<ul class="blog-zone">
					    <li>
					        <div class="blog-icon">
					        	<i class="fa  fa-pencil"></i>
					        </div>
					        <div class="blog-box">
					        	<img src="{{asset('fontend/images/blog-1.jpg')}}" alt="">
					            
					            <div class="blog-post-body clearfix">
						            <a href="blog-single.html">
					            		<h2>Ricebean black-eyed pea</h2>
						            </a>
					            	<div class="blog-post-tag">
						            	<div class="block">
						            		<i class="fa fa-clock-o"></i>
						            		<p>12 Jan,2014</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-user"></i>
						            		<p>Admin</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-tags"></i>
						            		<p>
						            			<a href="">Food Culture</a>,
						            			<a href="">Green Items</a>
						            		</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-comments"></i>
						            		<p>3 Comments</p>
						            	</div>
						            </div>
						            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nostrum inventore debitis accusantium natus praesentium enim sequi culpa provident dignissimos veniam deserunt voluptatibus fugit delectus pariatur numquam optio quidem illo. Obcaecati, placeat, enim accusantium sunt inventore sed dolorum molestiae ab consequuntur voluptatem dolor necessitatibus reprehenderit adipisci explicabo hic quibusdam pariatur!</p>
						            <a href="blog-single.html" class="btn btn-default btn-transparent pull-right" role="button">
								        <span>Read More</span>
								    </a>
					            </div>
					        </div>	<!-- End of /.blog-box -->
					    </li>
					    <li>
					        <div class="blog-icon">
					        	<i class="fa  fa-video-camera"></i>
					        </div>

					        <!-- Youtube -->
					        <div class="blog-box">
					        	<iframe src="http://www.youtube.com/embed/mcw6j-QWGMo" frameborder="0" allowfullscreen="" width="100%" height="400px"></iframe>
					            
					            <div class="blog-post-body clearfix">
					            	<a href="blog-single.html">
					            		<h2>Youtube Video Post Type Example</h2>
					            	</a>
					            	<div class="blog-post-tag">
						            	<div class="block">
						            		<i class="fa fa-clock-o"></i>
						            		<p>12 Jan,2014</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-user"></i>
						            		<p>Admin</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-tags"></i>
						            		<p>
						            			<a href="">Food Culture</a>,
						            			<a href="">Green Items</a>
						            		</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-comments"></i>
						            		<p>3 Comments</p>
						            	</div>
						            </div>
						            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nostrum inventore debitis accusantium natus praesentium enim sequi culpa provident dignissimos veniam deserunt voluptatibus fugit delectus pariatur numquam optio quidem illo. Obcaecati, placeat, enim accusantium sunt inventore sed dolorum molestiae ab consequuntur voluptatem dolor necessitatibus reprehenderit adipisci explicabo hic quibusdam pariatur!</p>
						            <a href="blog-single.html" class="btn btn-default btn-transparent pull-right" role="button">
								        <span>Read More</span>
								    </a>
					            </div>
					        </div>	<!-- End of /.blog-box -->
					    </li>
					    <li>
					       <div class="blog-icon">
					        	<i class="fa fa-music"></i>
					        </div>

					        <!-- Sound Cloud -->
					        <div class="blog-box">
					        	<iframe src="https://w.soundcloud.com/player/?url=https://soundcloud.com/haloproject/halo-scenes-from-the-four" frameborder="0" allowfullscreen="" width="100%" height="166"></iframe>
					            
					            <div class="blog-post-body clearfix">
					            	<a href="blog-single.html">
					            		<h2>Aduio Post Type Example</h2>
					            	</a>
					            	<div class="blog-post-tag">
						            	<div class="block">
						            		<i class="fa fa-clock-o"></i>
						            		<p>12 Jan,2014</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-user"></i>
						            		<p>Admin</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-tags"></i>
						            		<p>
						            			<a href="">Food Culture</a>,
						            			<a href="">Green Items</a>
						            		</p>
						            	</div>
						            	<div class="block">
						            		<i class="fa fa-comments"></i>
						            		<p>3 Comments</p>
						            	</div>
						            </div>
						            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, nostrum inventore debitis accusantium natus praesentium enim sequi culpa provident dignissimos veniam deserunt voluptatibus fugit delectus pariatur numquam optio quidem illo. Obcaecati, placeat, enim accusantium sunt inventore sed dolorum molestiae ab consequuntur voluptatem dolor necessitatibus reprehenderit adipisci explicabo hic quibusdam pariatur!</p>
						            <a href="blog-single.html" class="btn btn-default btn-transparent pull-right" role="button">
								        <span>Read More</span>
								    </a>
					            </div>
					        </div>
					    </li>
					  </ul>	<!-- End of /.blog-zone -->

					<!-- Pagination -->
					 <ul class="pagination pull-right">
					  	<li class="disabled"><a href="#">&laquo;</a></li>
					  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
					  	<li><a href="#">2</a></li>
					  	<li><a href="#">3</a></li>
					  	<li><a href="#">4</a></li>
					  	<li><a href="#">»</a></li>
					</ul>	<!-- End of /.pagination -->
				</div>	<!-- End of /.col-md-9 -->

				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Catagories</h4>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Italian Foods
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Traditional Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Indian Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Spanish Food
								</a>
								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Thai FoodN
								</a>
							</div>
						</div>	<!-- End of /.block -->
						<div class="block">
							<h4>Popular Posts</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="{{asset('fontend/images/post-img.png')}}" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      			Lorem ipsum dolor</a>
							    	  	<p>January 10,2014</p>
							    	</div>
							  	</li>	<!-- End of /.media -->
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="{{asset('fontend/images/post-img-2.png')}}" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      			Mauris blandit aliquet</a>
							    	  	<p>January 10,2014</p>
							    	</div>
							  	</li>	<!-- End of /.media -->
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="{{asset('fontend/images/post-img-3.png')}}" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      			Quisque velit nisi</a>
							    	  	<p>January 10,2014</p>
							    	</div>
							  	</li>	<!-- End of /.media -->
							</ul>	<!-- End of /.media-list -->
						</div>	<!-- End of /.block -->

						<div class="block">
							<h4>Tag Cloud</h4>
							<div class="tag-link">
								<a href="">BALLET</a>
								<a href="">BLOG</a>
								<a href="">CHRISTMAS</a>
								<a href="">ELEGANCE</a>
								<a href="">ELEGANT</a>
								<a href="">SHOPPING</a>
								<a href="">SHOP</a>
								<a href="">PHOTOGRAPHY</a>
							</div>	
						</div>	<!-- End of /.block -->
						
					</div>	<!-- End of /.blog-sidebar -->
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Blog -->


@endsection