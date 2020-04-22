<div class="col-md-8 col-sm-7 blog-posts">
    
    @foreach ($articles as $article)
    <!-- Post item -->
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="img/blog/blog-2.jpg" alt="">
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
            <p>{{Illuminate\Support\Str::limit($article->text,450,'...')}}</p>
            <a href="blog-post.html" class="read-more">Read More</a>
        </div>
    </div>
    @endforeach 
    {{-- <!-- Post item -->   
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="img/blog/blog-1.jpg" alt="">
            <div class="post-date">
                <h2>03</h2>
                <h3>Nov 2017</h3>
            </div>
        </div>
        <div class="post-content">
            <h2 class="post-title">Just a simple blog post</h2>
            <div class="post-meta">
                <a href="">Loredana Papp</a>
                <a href="">Design, Inspiration</a>
                <a href="">2 Comments</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
            <a href="blog-post.html" class="read-more">Read More</a>
        </div>
    </div>
    <!-- Post item -->
    <div class="post-item">
        <div class="post-thumbnail">
            <img src="img/blog/blog-3.jpg" alt="">
            <div class="post-date">
                <h2>03</h2>
                <h3>Nov 2017</h3>
            </div>
        </div>
        <div class="post-content">
            <h2 class="post-title">Just a simple blog post</h2>
            <div class="post-meta">
                <a href="">Loredana Papp</a>
                <a href="">Design, Inspiration</a>
                <a href="">2 Comments</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.</p>
            <a href="blog-post.html" class="read-more">Read More</a>
        </div>
    </div> --}}
    <!-- Pagination -->
    <div class="page-pagination">
        {{$articles->links()}}
        {{-- <a class="active" href="">01.</a>
        <a href="">02.</a>
        <a href="">03.</a> --}}
    </div>
</div>