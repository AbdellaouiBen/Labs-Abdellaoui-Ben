@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter un article</h1>
@stop

@section('content')

 
    <h1 class="mt-5 text-center bg-danger text-white "><u>Ajouter un article</u> </h1>

    <form action="{{route('article.store')}}" method="POST" class="pb-5" enctype="multipart/form-data" >
        @csrf
    
        <div class="text-center form-group container">   

            <div class="form-group">
                <label class="d-block input-group-text" for="img">img</label> 
                <input class="form-control  @error('article') is-invalid @enderror" type="file" name='img' >      
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
            
            <div class="form-group">
                <label class="d-block input-group-text" for="titre">titre</label> 
                <input class="form-control  @error('titre') is-invalid @enderror" placeholder="titre" type="text " name='titre' value="@if($errors->first('titre'))@else{{ old('titre') }}@endif">      
                @error('titre')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>             
            
            <div class="form-group">
                <label class="d-block input-group-text" for="text">text</label> 
                <textarea class="form-control  @error('text') is-invalid @enderror" name="text"cols="30" placeholder="text" rows="10">@if($errors->first('text'))@else{{ old('text') }}@endif</textarea>    
                @error('text')
                <div class="alert alert-danger">{{ $message }}</div> 
                @enderror   
            </div>       
          
                  


            
            <div class="form-group">
                <label class="d-block input-group-text" for="categorie_id">categorie</label>
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
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>       
            
            <div class="form-group">
                <label class="d-block input-group-text" for="tag">tags</label>
                <div class="row">
                    @foreach ($tags as $tag)
                    <div class="col-2">
                        <label for="tag">{{$tag->tag}}</label>
                        <input type="checkbox" name="tag[]" value="{{$tag->id}}" id="">
                    </div>
                    @endforeach
                </div>
                @error('tag')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>       
 
            <input class="btn btn-warning" type="submit" value="ajouter">
        </div>
    </form> 
    
    
@stop 
