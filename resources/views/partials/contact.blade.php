	<!-- Contact section -->
	<div  class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contact->titre}}</h2>
					</div>
					<p>{{$contact->text}} </p>
					<h3 class="mt60">{{$contact->sous_titre}}</h3>
					<p class="con-item">{{$contact->adress_un}} <br> {{$contact->adress_deux}}</p>
					<p class="con-item">{{$contact->tel}}</p>
					<p class="con-item">{{$contact->email}}</p>
				</div>
				<!-- contact form -->
				<div id="form" class="col-md-6 col-pull">
					<form action="{{route('form.store')}}" class="form-class" id="con_form" method="POST">
						@csrf
						
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="msg" placeholder="Message"></textarea>
								@if(Session::has('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
								@endif
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
					</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->