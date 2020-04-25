@extends('adminlte::page')

@section('title', 'Modifier la categorie '.$categorie->categorie)

@section('content_header')
@stop

@section('content')


    <div class="d-flex justify-content-center mt-3">
        <div class="card card-primary w-75 ">
            <div class="card-header">
              <h3 class="card-title">Modifier la categorie "{{$categorie->categorie}}"</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('categorie.update',$categorie)}}" method="post" >
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                    <label for="categorie">categorie</label>
                    <input name="categorie" type="text" class="form-control @error('categorie') is-invalid @enderror" id="categorie" value="{{ old('categorie',$categorie->categorie) }}" placeholder="Categorie">
                    @error('categorie')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        
        
              <!-- /.card-body -->
        
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{route('categorie.index')}}" class="btn btn-danger">Annuler</a>
              </div>
            </form>
          </div>
        </div>
    


@stop