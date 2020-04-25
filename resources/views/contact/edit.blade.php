@extends('adminlte::page')

@section('title', 'Modifier la section "Contact us"')

@section('content_header')
@stop

@section('content')



<div class="d-flex justify-content-center mt-3">
    <div class="card card-primary w-75 ">
        <div class="card-header">
          <h3 class="card-title">Modifier la section "Contact us"</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('contact.update',$contact)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input name="titre" type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" value="{{ old('titre',$contact->titre) }}" placeholder="Titre">
                @error('titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Texte</label>
                <input name="text" type="text" class="form-control @error('text') is-invalid @enderror" id="text" value="{{ old('text',$contact->text) }}" placeholder="Texte">
                @error('text')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="sous_titre">Sous-titre</label>
                <input name="sous_titre" type="text" class="form-control @error('sous_titre') is-invalid @enderror" id="sous_titre" value="{{ old('sous_titre',$contact->sous_titre) }}" placeholder="Sous-titre">
                @error('sous_titre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="adress_un">Adresse ligne 1</label>
                <input name="adress_un" type="text" class="form-control @error('adress_un') is-invalid @enderror" id="adress_un" value="{{ old('adress_un',$contact->adress_un) }}" placeholder="Adresse ligne 1">
                @error('adress_un')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="adress_deux">Adresse ligne 2</label>
                <input name="adress_deux" type="text" class="form-control @error('adress_deux') is-invalid @enderror" id="adress_deux" value="{{ old('adress_deux',$contact->adress_deux) }}" placeholder="Adresse ligne 2">
                @error('adress_deux')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="tel">Numero de télephone</label>
                <input name="tel" type="text" class="form-control @error('tel') is-invalid @enderror" id="tel" value="{{ old('tel',$contact->tel) }}" placeholder="Numero de télephone">
                @error('tel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email',$contact->email) }}" placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


        </div>
    
    
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{route('contact.index')}}" class="btn btn-danger">Annuler</a>
          </div>
        </form>
      </div>
    </div>


@stop