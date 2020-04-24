@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')



<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier la section "footer"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('footer.update',$footer)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="text">Texte</label>
                <input name="text" type="text" class="form-control @error('text') is-invalid @enderror" id="text" value="{{ old('text',$footer->text) }}" placeholder="Texte">
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="text_link">Texte contenant un lien</label>
                <input name="text_link" type="text" class="form-control @error('text_link') is-invalid @enderror" id="text_link" value="{{ old('text_link',$footer->text_link) }}" placeholder="Texte contenant un lien">
                @error('text_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="link">Le lien</label>
                <input name="link" type="text" class="form-control @error('link') is-invalid @enderror" id="link" value="{{ old('link',$footer->link) }}" placeholder="Sous-titre">
                @error('link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
           


        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{route('footer.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>






    
@stop