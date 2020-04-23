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
                <th class="col">img</th>
                <th class="col">titre</th>
                <th class="col">text</th>
                <th class="col">accepted</th>
                <th class="col">Auteur</th>
                <th class="col">categorie</th>
                <th class="col">tags</th>
                <th class="col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr class="row">
                        <td class="col"><img class="w-25" src="{{'storage/'.$article->img}}" alt=""></td>
                        <td class="col">{{$article->titre}}</td>
                        <td class="col">{{Illuminate\Support\Str::limit($article->text,300,'...')}}</td>
                        <td class="col">{{$article->accepted}}</td>
                        <td class="col">{{$article->user->name}}</td>
                        <td class="col">{{$article->categorie->categorie}}</td>
                        <td class="col"><ul>@foreach ($article->tags as $item)<li>{{$item->tag}}  </li>@endforeach</ul></td>
                        <td class="col ">
                            <a href="{{route('article.edit',$article)}}" class="btn btn-warning ">edit</a>
                            <form action="{{route('article.destroy',$article)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>  

    
@stop