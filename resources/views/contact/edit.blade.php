@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">editer section "contact us"</h1>
@stop

@section('content')

        <div class="container">
            <div class="text-center">
                <h1 class="text-white shadow-lg p-3 mb-5 bg-danger rounded">editer section "contact us"</h1>
            </div>
            <div class="card-body">
            <form action="{{route('contact.update',$contact)}}" method="post" >
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('titre') }}</label>
                    <div class="col-md-6">
                        <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre',$contact->titre) }}" >
                        @error('titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right ">{{ __('text') }}</label>
                    <div class="col-md-6">
                        <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ old('text',$contact->text) }}" >
                        @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="sous_titre" class="col-md-4 col-form-label text-md-right ">{{ __('sous_titre') }}</label>
                    <div class="col-md-6">
                        <input id="sous_titre" type="text" class="form-control @error('sous_titre') is-invalid @enderror" name="sous_titre" value="{{ old('sous_titre',$contact->sous_titre) }}" >
                        @error('sous_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="adress_un" class="col-md-4 col-form-label text-md-right ">{{ __('adress_un') }}</label>
                    <div class="col-md-6">
                        <input id="adress_un" type="text" class="form-control @error('adress_un') is-invalid @enderror" name="adress_un" value="{{ old('adress_un',$contact->adress_un) }}" >
                        @error('adress_un')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="adress_deux" class="col-md-4 col-form-label text-md-right ">{{ __('adress_deux') }}</label>
                    <div class="col-md-6">
                        <input id="adress_deux" type="text" class="form-control @error('adress_deux') is-invalid @enderror" name="adress_deux" value="{{ old('adress_deux',$contact->adress_deux) }}" >
                        @error('adress_deux')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="tel" class="col-md-4 col-form-label text-md-right ">{{ __('tel') }}</label>
                    <div class="col-md-6">
                        <input id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel',$contact->tel) }}" >
                        @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right ">{{ __('email') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$contact->email) }}" >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{route('contact.index')}}" class="btn btn-primary">ANNULER</a>
                </div>
               
            </form>

            </div>
        </div>
       

    
@stop