					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
								
							<li><a href="{{route('tag.show',$tag)}}">{{$tag->tag}}</a></li>
							@endforeach
				
						</ul>
					</div>