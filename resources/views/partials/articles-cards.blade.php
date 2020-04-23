	<!-- services card section-->
	<div id="articles-cards" class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($articles as $article)
					
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<a style="color: black" href="{{route('article.show',$article)}}">
						<div class="card-img">
							<img src="{{asset('storage/'.$article->img)}}" alt="">
						</div>
						<div class="card-text">
							<h2>{{$article->titre}}</h2>
							<p>{{Illuminate\Support\Str::limit($article->text,210,'...')}}</p>
						</div>
						</a>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
	<!-- services card section end-->