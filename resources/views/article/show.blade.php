@extends('layouts.master')

@section('content')
    @include('components.pageheader')
    <div class="page-section spad">
		<div class="container">
            <div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">

                <!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{asset('storage/'.$article->img)}}" alt="">
							<div class="post-date">
								<h2>{{$article->created_at->format('d')}}</h2>
								<h3>{{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}} {{$article->created_at->format('Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->titre}}</h2>
							<div class="post-meta">
								<a href="">{{$article->categorie->categorie}}</a>
								<a href="">
									@foreach ($article->tags->shuffle()->take(3) as $index=>$item) 
                    					{{$item->tag}}
                    				@endforeach 
								</a>
								<a href="">2 Comments</a>
							</div>
							<p>{{$article->text}}</p>
							
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('storage/'.$article->user->img)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->user->name}} <span>Author</span></h2>
								<p>{{$article->user->description}}  </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments (2)</h2>
							<ul class="comment-list">
								<li>
									<div class="avatar">
										<img src="img/avatar/01.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
								<li>
									<div class="avatar">
										<img src="img/avatar/02.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li>
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> 


                <!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">

                    
                    @include('components.search-form')
                    @include('components.categories')
                    @include('components.tags')
                    @include('components.quote')

			

                </div>
            </div>
		</div>
	</div>
	<!-- page section end-->

    
    @include('components.newsletter')
    @include('components.footer')
@endsection