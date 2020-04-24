
	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! App\Helpers\ColorChanger::color(($independant->services_titre))!!}</h2>
				
			</div>
			<div class="row">
				@foreach ($services as $service)
					<!-- single service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->icon}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->titre}}</h2>
								<p>{{$service->description}}</p>
							</div>
						</div>
					</div>
				@endforeach 
				<div class="text-center">
					{{Request::route()->getName()=='servicepage.index'? $services->links():''}}
				</div>

			</div> 
			<div class="text-center">
				<a href="{{Request::route()->getName()=='servicepage.index'?'#feature':"/servicepage"}}" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->