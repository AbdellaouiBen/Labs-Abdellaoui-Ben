@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
@stop

@section('content')


          <table class="table table-striped table-dark">
            <thead>
                <tr class="text-center">
                    <th colspan="8" class="">
                        <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Articles</span>  </h1> 
                        <a href="{{route('article.create')}}"><i class="fas fa-plus-square fa-2x text-success"></i></a>
                    </th>
                </tr>
              <tr >
                <th scope="col">Image</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                <th scope="col">Statut</th>
                <th scope="col">Categorie</th>
                <th scope="col">Auteur</th>
                <th scope="col">Tags</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    
                <tr>
                    <th><img class="img-fluid" src="{{'storage/'.$article->img}}" alt=""></th>
                    <td>{{$article->titre}}</td>
                    <td>{{Illuminate\Support\Str::limit($article->text,300,'...')}}</td>
                    <td class="text-center">
                      @if ($article->accepted)
                      <i class="fas fa-check-circle text-success"></i>
                      @else
                      <i class="fas fa-times-circle text-danger"></i>
                      @endif  
                    </td>
                    <td>{{$article->user->name}}</td>
                    <td>{{$article->categorie->categorie}}</td>
                    <td><ul style="padding-left: 20px">@foreach ($article->tags as $item)<li>{{$item->tag}}  </li>@endforeach</ul></td>
                    <td>   
                        @can('adminWebRedacteurOf',$article, App\Article::class)
                            
                                  
                            <div class="text-center mb-2">
                                <a  class="  btn btn-warning rounded-circle " href="{{route('article.edit',$article)}}"><i class="fas fa-pencil-alt"></i></a> 
                            </div>
                            <div class="text-center">
                                <a class="   rounded-circle btn btn-danger "  data-toggle="modal" data-target="#deletearticle{{$article->id}}" href=""><i class="fas fa-trash-alt"></i></a>
                            </div>

                        @endcan 
                    </td>
                </tr>
                @can('adminWebRedacteurOf',$article, App\Article::class)

                        <div class="modal fade" id="deletearticle{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header ">
                                <h4 class="modal-title">Attention!!!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>
                                <div class="modal-body text-center">
                                <p>Vous êtes sur le point de supprimer l'article de {{ucfirst($article->titre)}}! <br> Cette action n'est pas reversible!</p>
                                </div>
                                <div class="modal-footer float-right">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                                <form action="{{route('article.destroy',$article)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-light">Supprimer cet article</button>
                                </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        @endcan 

                @endforeach
          
            </tbody>
          </table>   







@stop

