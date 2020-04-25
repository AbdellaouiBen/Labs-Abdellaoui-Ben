				<!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $categorie)
                        <li>
                        <form action="{{route('categorie.show',$categorie)}}" method="get">
                            @csrf
                            <a href="">
                                <button style="border: none; background-color: white" type="submit">{{$categorie->categorie}}</button>
                            </a>
                        </form>
                            </li>
                        @endforeach

                    </ul>
                </div>