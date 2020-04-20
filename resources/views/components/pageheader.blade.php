	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>
					{{Request::route()->getName()=='blog.index'?'Blog':''}}
					{{Request::route()->getName()=='service.index'?'Services':''}}
					{{Request::route()->getName()=='contact.index'?'Contact':''}}
				</h2>
				<div class="page-links">
					<a href="{{route('index.index')}}">Home</a>
					<span>
						{{Request::route()->getName()=='blog.index'?'Blog':''}}
						{{Request::route()->getName()=='service.index'?'Services':''}}
						{{Request::route()->getName()=='contact.index'?'Contact':''}}
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->