@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">elements independants</h1>
@stop
@section('css')
<style>.color_helper{
   background: #2be6ab;
   padding: 0 3px 5px;
   display: inline-block;
   color: #0b1033;
}; </style>
    
@endsection
@section('content')

 

    
        <div class="container">
            <div class="text-center">
                
                <h1 class=" shadow-lg p-3 mb-5 bg-danger rounded">update les elements independants</h1>
            </div>
            <div class="card-body">
                    <div class="bg-dark rounded shadow p-1">
                        <p  colspan="2" scope="row" class="text-center">Mettez les caractères souhaité entre '[' et ']' dans les sections contenant une '*' afin de le faire apparaitre en bleu avec une couleur de fond verte <br> <u>Exemple:</u>  <br> Ecrivez : Hello [World] ! <br> Obtenez: Hello <span class="color_helper">World</span> !</p>
                    </div>
            <form action="{{route('independant.update',$independant)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="form-group row">
                    <label for="banniere_text" class="col-md-4 col-form-label text-md-right">{{ __('banniere_text*') }}</label>
                    <div class="col-md-6">
                        <input id="banniere_text" type="text" class="form-control @error('banniere_text') is-invalid @enderror" name="banniere_text" value="{{ old('banniere_text',$independant->banniere_text) }}" >
                        @error('banniere_text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="presentation_titre" class="col-md-4 col-form-label text-md-right">{{ __('presentation_titre*') }}</label>
                    <div class="col-md-6">
                        <input id="presentation_titre" type="text" class="form-control @error('presentation_titre') is-invalid @enderror" name="presentation_titre" value="{{ old('presentation_titre',$independant->presentation_titre) }}" >
                        @error('presentation_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="presentation_text_un" class="col-md-4 col-form-label text-md-right">{{ __('presentation_text_un') }}</label>
                    <div class="col-md-6">
                        <input id="presentation_text_un" type="text" class="form-control @error('presentation_text_un') is-invalid @enderror" name="presentation_text_un" value="{{ old('presentation_text_un',$independant->presentation_text_un) }}" >
                        @error('presentation_text_un')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="presentation_text_deux" class="col-md-4 col-form-label text-md-right">{{ __('presentation_text_deux') }}</label>
                    <div class="col-md-6">
                        <input id="presentation_text_deux" type="text" class="form-control @error('presentation_text_deux') is-invalid @enderror" name="presentation_text_deux" value="{{ old('presentation_text_deux',$independant->presentation_text_deux) }}" >
                        @error('presentation_text_deux')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="presentation_btn" class="col-md-4 col-form-label text-md-right">{{ __('presentation_btn') }}</label>
                    <div class="col-md-6">
                        <input id="presentation_btn" type="checkbox" class="form-control @error('presentation_btn') is-invalid @enderror" name="presentation_btn" 
                        @if (old('presentation_btn',$independant->presentation_btn))
                            checked
                        @endif value='1' >
                        @error('presentation_btn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="video_img" class="col-md-4 col-form-label text-md-right">{{ __('video_img') }}</label>
                    <div class="col-md-6">
                        <input id="video_img" type="file" class="form-control @error('video_img') is-invalid @enderror" name="video_img"  >
                        @error('video_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="video_url" class="col-md-4 col-form-label text-md-right">{{ __('video_url') }}</label>
                    <div class="col-md-6">
                        <input id="video_url" type="text" class="form-control @error('video_url') is-invalid @enderror" name="video_url" value="{{ old('video_url',$independant->video_url) }}" >
                        @error('video_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="testimonials_titre" class="col-md-4 col-form-label text-md-right">{{ __('testimonials_titre*') }}</label>
                    <div class="col-md-6">
                        <input id="testimonials_titre" type="text" class="form-control @error('testimonials_titre') is-invalid @enderror" name="testimonials_titre" value="{{ old('testimonials_titre',$independant->testimonials_titre) }}" >
                        @error('testimonials_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="services_titre" class="col-md-4 col-form-label text-md-right">{{ __('services_titre*') }}</label>
                    <div class="col-md-6">
                        <input id="services_titre" type="text" class="form-control @error('services_titre') is-invalid @enderror" name="services_titre" value="{{ old('services_titre',$independant->services_titre) }}" >
                        @error('services_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="team_titre" class="col-md-4 col-form-label text-md-right">{{ __('team_titre*') }}</label>
                    <div class="col-md-6">
                        <input id="team_titre" type="text" class="form-control @error('team_titre') is-invalid @enderror" name="team_titre" value="{{ old('team_titre',$independant->team_titre) }}" >
                        @error('team_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="promotion_titre" class="col-md-4 col-form-label text-md-right">{{ __('promotion_titre*') }}</label>
                    <div class="col-md-6">
                        <input id="promotion_titre" type="text" class="form-control @error('promotion_titre') is-invalid @enderror" name="promotion_titre" value="{{ old('promotion_titre',$independant->promotion_titre) }}" >
                        @error('promotion_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="promotion_text" class="col-md-4 col-form-label text-md-right">{{ __('promotion_text') }}</label>
                    <div class="col-md-6">
                        <input id="promotion_text" type="text" class="form-control @error('promotion_text') is-invalid @enderror" name="promotion_text" value="{{ old('promotion_text',$independant->promotion_text) }}" >
                        @error('promotion_text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="feature_titre" class="col-md-4 col-form-label text-md-right">{{ __('feature_titre') }}</label>
                    <div class="col-md-6">
                        <input id="feature_titre" type="text" class="form-control @error('feature_titre') is-invalid @enderror" name="feature_titre" value="{{ old('feature_titre',$independant->feature_titre) }}" >
                        @error('feature_titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                
                
                
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                    <a href="{{route('independant.index')}}" class="btn btn-primary">ANNULER</a>
                </div>
               
            </form>

            </div>
        </div>
       

    
@stop