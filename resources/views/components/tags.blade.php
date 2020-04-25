					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
							<li>
								<form action="{{route('tag.show',$tag)}}" method="get">
									@csrf
									<a href=""><button  style="border: none; background-color: transparent" type="submit">{{$tag->tag}}</button></a>
								</form> 
							</li>
							@endforeach
						</ul>           
					</div>