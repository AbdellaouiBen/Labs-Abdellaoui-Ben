	<!-- newsletter section -->
	<div id="newsletter" class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="{{route('newsletter.store')}}" method="POST">
						@csrf
						<input type="text" class="@error('email') is-invalid @enderror" name="email" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
					@error('email')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					@if(Session::has('inscrit'))
						<div class="alert alert-success">
							{{ Session::get('inscrit') }}
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->