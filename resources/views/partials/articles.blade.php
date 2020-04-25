<div class="col-md-8 col-sm-7 blog-posts">
    @if (count($articles)==0)
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Oupss!</h4>
        <p>Désolé... il n'y a pas encore d'article </p>    
      </div>

        
    @else
        
    
    
    @foreach ($articles as $article)
    <!-- Post item -->
    <div class="post-item">
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
                <span>
                    <form action="{{route('categorie.show',$article->categorie)}}" method="get">
                        @csrf
                    <button  type="submit">{{$article->categorie->categorie}}</button>
                    </form>
                </span>
               <span>
                    @foreach ($article->tags->shuffle()->take(3) as $index=>$tag) 
                    
                    <form action="{{route('tag.show',$tag)}}" method="get">
                        @csrf
                        @if($loop->last)
                           <button type="submit">{{$tag->tag}}</button> 
                        @else
                           <button type="submit">{{$tag->tag}} -</button>
                        @endif
                    </form>
                    @endforeach 
                   
                </span> 
               <span> <a href="{{route('article.show',$article)}}#comments">{{$article->comments->count()}} Comments</a>  </span>
            </div>
            <p>{{Illuminate\Support\Str::limit($article->text,450,'...')}}</p>
            <a href="{{route('article.show',$article)}}" class="read-more">Read More</a>
        </div>
    </div>
    @endforeach 
   
    <!-- Pagination -->
    <div class="page-pagination">
        {{$articles->links()}}
        {{-- <a class="active" href="">01.</a>
        <a href="/blog?page=2">02.</a>
        <a href="/blog?page=3">03.</a> --}}
    </div>
    @endif
</div>  