@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark"> Article</h1>
@stop

@section('content')

    <div class="container">
        <h1 class="text-center">Articles</h1>
        <a href="{{route('article.create')}}">
            <button class="btn btn-success d-block mx-auto">Ajouter un Article</button>
        </a>
        <table class="table">
            <thead>
              <tr  class="row bg-danger text-white">
                <th class="col-2">img</th>
                <th class="col-1">titre</th>
                <th class="col-3">text</th>
                <th class="col-1">accepted</th>
                <th class="col-1">Auteur</th>
                <th class="col-1">categorie</th>
                <th class="col-2">tags</th>
                <th class="col-1">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr class="row">
                        <td class="col-2"><img class="img-fluid" src="{{'storage/'.$article->img}}" alt=""></td>
                        <td class="col-1">{{$article->titre}}</td>
                        <td class="col-3">{{Illuminate\Support\Str::limit($article->text,300,'...')}}</td>
                        <td class="col-1 text-center">
                            @if ($article->accepted)
                            <i class="fas fa-check-circle text-success"></i>
                            @else
                            <i class="fas fa-times-circle text-danger"></i>
                            @endif
                        </td>
                        <td class="col-1">{{$article->user->name}}</td>
                        <td class="col-1">{{$article->categorie->categorie}}</td>
                        <td class="col-2"><ul style="padding-left: 20px">@foreach ($article->tags as $item)<li>{{$item->tag}}  </li>@endforeach</ul></td>
                        <td class="col-1 ">
                            @can('adminWebRedacteurOf', $article ,App\Article::class)

                            <a href="{{route('article.edit',$article)}}" class="btn btn-warning ">edit</a>
                            <a type='submit'  data-toggle="modal" data-target="#modaldeletearticle" class="btn btn-danger">Supprimer</a>
 
                            @endcan
                        </td>
                    </tr> 
 

                    <div class="modal fade" id="modaldeletearticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content bg-danger">
                            <div class="modal-header ">
                              <h4 class="modal-title">Attention!!!</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                              <p>Vous êtes sur le point de supprimer l'article "{{$article->titre}}"! <br> Cette action n'est pas reversible!</p>
                            </div>
                            <div class="modal-footer float-right">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Annuler</button>
                              <form action="{{route('article.destroy',$article)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-outline-light">Supprimer l'article</button>
                            </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>







                @endforeach
            </tbody>
          </table>  

    
@stop