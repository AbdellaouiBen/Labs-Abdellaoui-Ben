@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')




<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Ajouter un Article </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data"  >
            @csrf
          <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input name="titre" type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" value="@if($errors->first('titre'))@else{{ old('titre') }}@endif" placeholder="Titre">
                @error('titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input name="img" type="file" class="form-control @error('img') is-invalid @enderror" id="img" >
                @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Article</label>
                <textarea placeholder="Article" name="text"  class="form-control @error('text') is-invalid @enderror" id="text" cols="30" rows="20">@if($errors->first('text'))@else{{ old('text') }}@endif</textarea>
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="categorie_id">Fonction du client</label>
                <select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" id="categorie_id">
                    @foreach ($categories as $categorie)
                @if ($categorie->id == old('categorie_id'))
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
                <div class="row">
                    @foreach ($tags as $tag)
                    <div class="col-2">
                        <label for="tag">{{$tag->tag}}</label>
                        <input type="checkbox" name="tag[]" value="{{$tag->id}}" id="">
                    </div>
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
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a href="{{route('article.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>
    
    
@stop 
