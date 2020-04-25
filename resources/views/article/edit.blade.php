@extends('adminlte::page')

@section('title', "Modifier l'article "".$article->titre)

@section('content_header')
@stop

@section('content')

        
<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier l'article {{$article->titre}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('article.update',$article)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="accepted">Validation de l'article</label>
                <input name="accepted" type="checkbox" class="form-control @error('accepted') is-invalid @enderror" id="accepted" value="{{ old('accepted',$article->accepted) }}"@if (old('accepted',$article->accepted))
                checked
            @endif value='1'  >
                @error('accepted')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
 
            <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input name="titre" type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre',$article->titre) }}" placeholder="Titre">
                @error('titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="img">Image</label>
                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img" placeholder="Photo du client">
                @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Article</label>
                <textarea name="text" placeholder="Article" id="text" class="form-control @error('text') is-invalid @enderror"  cols="30" rows="25">{{ old('text',$article->text) }}</textarea>
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="categorie_id">Categorie de l'article</label>
                <select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" id="categorie_id">
                    @foreach ($categories as $categorie)
                        @if ($categorie->id == old('categorie_id',$article->categorie_id))
                            <option checked value="{{$categorie->id }}">{{$categorie->categorie}} </option>
                        @else
                            <option value="{{$categorie->id }}">{{$categorie->categorie}} </option>
                        @endif
                    @endforeach
                </select>
                @error('categorie_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tag">Tags</label>
                <div class="row my-3">
                    @foreach ($tags as $tag)
                        @if ($articletag->where('tag_id',$tag->id)->first())
                            <div class="col-3">
                                <label for="tag">{{$tag->tag}}</label>
                                <input checked type="checkbox" name="tag[]" value="{{$tag->id}}" class=" @error('tag') is-invalid @enderror" id="">
                            </div>
                        @else
                            <div class="col-3">
                                <label for="tag">{{$tag->tag}}</label>
                                <input  type="checkbox" name="tag[]" value="{{$tag->id}}" class=" @error('tag') is-invalid @enderror" id="">
                            </div>
                        @endif
                    @endforeach
                </div>
                @error('tag')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{route('article.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>


@stop