		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$independant->presentation_titre}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$independant->presentation_text_un}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$independant->presentation_text_deux}}</p>
					</div>
				</div>
				@if ($independant->presentation_btn)
					<div class="text-center mt60">
						<a href="{{route('contactpage.index')}}" class="site-btn">Browse</a>
					</div>
				@endif
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<img src="{{asset('storage/'.$independant->video_img)}}" alt="">
							<a href="{{$independant->video_url}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->