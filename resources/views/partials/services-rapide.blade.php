	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($servicesRapides as $servicesRapide)
						
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card" style="height: 380px">
							<div class="icon">
								<i class="{{$servicesRapide->icon}}"></i>
							</div>
							<h2>{{$servicesRapide->titre}}</h2>
							<p>{{$servicesRapide->description}}</p>
						</div>
					</div>
					@endforeach
					{{-- <!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		<!-- card section end-->