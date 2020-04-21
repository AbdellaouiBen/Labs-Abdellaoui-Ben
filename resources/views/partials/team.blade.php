
	<!-- Team Section -->
	<div id="team" class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$independant->team_titre}}</h2>
			</div>
			<div class="row">
				@foreach ($randomUsers as $index=>$user)

					@if ($index==0)
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{'storage/'.$user->img}}" alt="">
							<h2>{{$user->name}}</h2>
							<h3>{{$user->role->role}}</h3>
						</div>
					</div>
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{'storage/'.$CEO->img}}" alt="">
							<h2>{{$CEO->name}}</h2>
							<h3>{{$CEO->role->role}}</h3>
						</div>
					</div>
					@else
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{'storage/'.$user->img}}" alt="">
							<h2>{{$user->name}}</h2>
							<h3>{{$user->role->role}}</h3>
						</div>
					</div>

					@endif
				@endforeach
				
				
				
				
				
				
				
				
				
				{{-- <!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Project Manager</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- Team Section end-->