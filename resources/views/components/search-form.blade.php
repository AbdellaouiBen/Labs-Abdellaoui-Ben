<!-- Single widget -->
<div class="widget-item">
    <form action="{{route('article.search')}}" class="search-form" method="GET">
        @csrf
        <input name="search" type="text" placeholder="Chercher un article">
        <button class="search-btn"><i class="flaticon-026-search"></i></button>
    </form>
</div>