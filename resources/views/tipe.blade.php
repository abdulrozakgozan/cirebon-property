@extends('master')
@section('title','services')
@section('content')

<!-- Tipe Property -->
<div id="tipe" class="services blog">
	
		<p class="wthree-ttext">Temukan Property Idaman Anda</p>	
		<div class="blog-agileinfo">
			<div class="col-md-6 col-sm-6 blog-w3lgrids">
				<div class="blog-gridtext">
					<div class="blog-w3img">
						<a href="#myModalBlog1" data-toggle="modal"><img src="images/bg1.jpg" class="img-responsive zoom-img" alt=""/></a>
					</div>
					<div class="blog-w3imgtext">
						<h4><a href="#myModalBlog1" data-toggle="modal">Model 1</a></h4>
						<p class="w3-agilep">Posted By<a href="#"> Admin</a> &nbsp;&nbsp;on  Nov 30, 2016 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
						<p>property Model 1 </p>
						<a href="#myModalBlog1" class="wthree-btn w3btn2 w3btn2a" data-toggle="modal">Read more</a> 
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 blog-w3lgrids">
				<div class="blog-gridtext">
					<div class="blog-w3img">
						<a href="#myModalBlog2" data-toggle="modal"><img src="images/bg2.jpg" class="img-responsive zoom-img" alt=""/></a>
					</div>
					<div class="blog-w3imgtext">
						<h4><a href="#myModalBlog2" data-toggle="modal">Model 2</a></h4>
						<p class="w3-agilep">Posted By<a href="#"> Admin</a> &nbsp;&nbsp;on  Nov 21, 2016 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
						<p>property Model 2</p>
						<a href="#myModalBlog2" class="wthree-btn w3btn2 w3btn2a" data-toggle="modal">Read more</a> 
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="blog-agileinfo">
			<div class="col-md-4 col-sm-6 blog-w3lgrids">
				<div class="blog-gridtext">
					<div class="blog-w3img">
						<a href="#myModalBlog3" data-toggle="modal"><img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/></a>
					</div>
					<div class="blog-w3imgtext">
						<h4><a href="#myModalBlog3" data-toggle="modal">Model 3</a></h4>
						<p class="w3-agilep">Posted By<a href="#"> Admin</a> &nbsp;&nbsp;on  Nov 12, 2016 </p>
						<p>property Model 3.</p>
						<a href="#myModalBlog3" class="wthree-btn w3btn2 w3btn2a" data-toggle="modal">Read more</a> 
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 blog-w3lgrids">
				<div class="blog-gridtext">
					<div class="blog-w3img">
						<a href="#myModalBlog4" data-toggle="modal"><img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/></a>
					</div>
					<div class="blog-w3imgtext">
						<h4><a href="#myModalBlog4" data-toggle="modal">Model 4</a></h4>
						<p class="w3-agilep">Posted By<a href="#"> Admin</a> &nbsp;&nbsp;on  Nov 4, 2016</p>
						<p>property Model 4</p>
						<a href="#myModalBlog4" class="wthree-btn w3btn2 w3btn2a" data-toggle="modal">Read more</a> 
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 blog-w3lgrids">
				<div class="blog-gridtext">
					<div class="blog-w3img">
						<a href="#myModalBlog5" data-toggle="modal"><img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/></a>
					</div>
					<div class="blog-w3imgtext">
						<h4><a href="#myModalBlog5" data-toggle="modal">Model 5</a></h4>
						<p class="w3-agilep">Posted By<a href="#"> Admin</a> &nbsp;&nbsp;on  Sept 21, 2016</p>
						<p>property Model 5</p>
						<a href="#myModalBlog5" class="wthree-btn w3btn2 w3btn2a" data-toggle="modal">Read more</a> 
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
	</div>
</div> 
<!-- //blog -->

<!-- modal-blog -->
<div class="modal bnr-modal fade" id="myModalBlog1" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body modal-spa">
				<img src="images/bg1.jpg" class="img-responsive" alt=""/>
				<h4>Model 1</h4>
				<p>Property Model 1.......... </p>
			</div> 
		</div>
	</div>
</div>
<div class="modal bnr-modal fade" id="myModalBlog2" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body modal-spa">
				<img src="images/bg2.jpg" class="img-responsive" alt=""/>
				<h4>Model 2</h4>
				<p>Property Model 2.......... </p>
			</div> 
		</div>
	</div>
</div>
<div class="modal bnr-modal fade" id="myModalBlog3" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body modal-spa">
				<img src="images/g2.jpg" class="img-responsive" alt=""/>
				<h4>Model 3</h4>
				<p>Property Model 3.......... </p>
			</div> 
		</div>
	</div>
</div>
<div class="modal bnr-modal fade" id="myModalBlog4" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body modal-spa">
				<img src="images/g4.jpg" class="img-responsive" alt=""/>
				<h4>Model 4</h4>
				<p>Property Model 4.......... </p>
			</div>  
		</div>
	</div>
</div>
<div class="modal bnr-modal fade" id="myModalBlog5" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body modal-spa">
				<img src="images/g5.jpg" class="img-responsive" alt=""/>
				<h4>Model 5</h4>
				<p>Property Model 5.......... </p>
			</div>  
		</div>
	</div>
</div>
<!-- // modal-blog -->

@endsection	