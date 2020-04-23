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
								<a href="">{{count($commentairecount)}} Comments</a>
							</div>
							<p>{{$article->text}}</p>
							
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img  src="{{asset('storage/'.$article->user->img)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->user->name}} <span>Auteur</span></h2>
								<p>{{$article->user->description}}  </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{count($commentairecount)}})</h2>

							<ul class="comment-list">
								@foreach ($commentaires as $commentaire)
									
								
								<li>
									<div class="avatar">
										<img src="{{asset('storage/'.$commentaire->user->img)}}" alt="">
									</div>
									<div class="commetn-text">
										<h3>{{$commentaire->user->name}} {{$commentaire->user->firstname}} | {{$commentaire->created_at->format('d')}} {{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}}, {{$commentaire->created_at->format('Y')}} | {{$commentaire->created_at->format('H')}}h{{$commentaire->created_at->format('i')}}</h3>
										<p>{{$commentaire->commentaire}} </p>
									</div>
									<form class="text-right" action="{{route('commentaire.destroy',$commentaire)}}" method="post">
										@csrf
										@method('DELETE')
										<p><a class="text-warning"   data-toggle="modal" data-target=".modal-{{$commentaire->id}}" style="border: none" type="submit">modifier</a> </p>
										<p><button class="text-danger" style="border: none" type="submit">supprimer</button> </p>
									</form>
								</li>
								<div class="modal fade modal-{{$commentaire->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg p-2" role="document">
									  <div class="modal-content">
										<h3 class="pb-2">Modifier mon commentaire</h3>
										<form class="form-class" action="{{route('commentaire.update',$commentaire)}}" method="POST">
										  @csrf
										  @method('PUT')
										  <div class="container row">
											  
											  <div class="col-sm-12 mt-5 ">
												  <textarea style="width: 75%" name="commentaire" placeholder="Message"></textarea>
											  </div>
											  <button class="site-btn">Envoyer</button>
										  </div>
									  </form>
									  </div>
									</div>
								  </div>
								@endforeach
							</ul>
							{{$commentaires->links()}}
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class" action="{{route('store.commentaire',$article)}}" method="POST">
									@csrf
									<div class="row">
										<div class="col-sm-12">
											<textarea name="commentaire" placeholder="Message"></textarea>
											<button class="site-btn">Envoyer</button>
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