				<!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $categorie)
                            
                        <li><a href="{{route('categorie.show',$categorie)}}">{{$categorie->categorie}}</a></li>
                        @endforeach

                    </ul>
                </div>