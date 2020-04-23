	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>
					{{Request::route()->getName()=='blog.index'?'Blog':''}}
					{{Request::route()->getName()=='servicepage.index'?'Services':''}}
					{{Request::route()->getName()=='contactpage.index'?'Contact':''}}
					{{Request::route()->getName()=='article.show'?'Blog':''}}
					{{-- {{ucfirst(Request::route()->getName())}} --}}
				</h2>
				<div class="page-links">
					<a href="{{route('index.index')}}">Home</a>
					<span>
						{{Request::route()->getName()=='blog.index'?'Blog':''}}
						{{Request::route()->getName()=='servicepage.index'?'Services':''}}
						{{Request::route()->getName()=='contactpage.index'?'Contact':''}}
						{{Request::route()->getName()=='article.show'?'Blog':''}}
					</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->