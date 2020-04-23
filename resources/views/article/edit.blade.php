@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">edit article</h1>
@stop

@section('content')



    <h1 class="mt-5 text-center bg-danger text-white ">edit article</h1>

    <form action="{{route('article.update',$article)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="text-center form-group container">    

            <div class="form-group">
                <label class="d-block input-group-text" for="img">img</label>
                <input class=" @error('img') is-invalid @enderror" type="file" name='img' >
                @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
 
            <div class="form-group">
                <label class="d-block input-group-text" for="titre">titre</label>
                <input class="form-control @error('titre') is-invalid @enderror" type="text" name='titre' value="{{old('titre',$article->titre)}}">
                @error('titre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label class="d-block input-group-text" for="article">article</label>
                <textarea class="form-control @error('article') is-invalid @enderror" name="text" id="text" cols="30" rows="10">{{old('text',$article->text)}}</textarea>
                @error('article')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>       

            <div class="form-group">
                <label class="d-block input-group-text" for="accepted">accepted</label>
                <input class="form-control @error('article') is-invalid @enderror" type="checkbox" name='accepted' value="{{old('accepted',$article->accepted)}}">
                @error('accepted')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            <div class="form-group">
                <label class="d-block input-group-text" for="categorie_id">categorie</label>
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
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 

            
            {{-- <div class="form-group">
                <label class="d-block input-group-text" for="tag">tags</label>
                <div class="row">

                    @foreach ($tags as $tag)
                        @if ($article->tags->contains($tag->id))
                            <div class="col-2">
                                <label for="tag">{{$tag->tag}}</label>
                                <input checked type="checkbox" name="tag[]" value="{{$tag->id}}"">
                            </div>
                        @else
                            <div class="col-2">
                                <label for="tag">{{$tag->tag}}</label>
                                <input type="checkbox" name="tag[]" value="{{$tag->id}}" >
                            </div>
                            
                        @endif 
                    @endforeach
                </div>
                @error('tag')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>    --}}
            <div class="form-group ">
                <label class="h3" for="tag ">Tags:</label>
    
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
                @error('tag.*')
                <div class="alert alert-danger">{{  $message  }}</div>
                @enderror
                </div>
    
    
    
            </div>

            <input type="submit" value="soumettre">
        </div> 
    </form>
    
@stop