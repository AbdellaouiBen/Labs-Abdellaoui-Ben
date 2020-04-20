	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>
					{{Request::route()->getName()=='blog'?'Blog':''}}
					{{Request::route()->getName()=='services'?'Services':''}}
					{{Request::route()->getName()=='contact'?'Contact':''}}
				</h2>
				<div class="page-links">
					<a href="#">
						
					</a>
					<span>
						{{Request::route()->getName()=='blog'?'Blog':''}}
						{{Request::route()->getName()=='service'?'Services':''}}
						{{Request::route()->getName()=='contact'?'Contact':''}}
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->