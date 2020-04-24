@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
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

 




        <div class="d-flex justify-content-center mt-3">
            <div class="card card-primary w-75 ">
                <div class="card-header">
                  <h3 class="card-title">Modifier des elements du site</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="bg-dark rounded shadow p-1">
                    <p  colspan="2" scope="row" class="text-center">Mettez les caractères souhaité entre '[' et ']' dans les sections contenant une '*' afin de le faire apparaitre en bleu avec une couleur de fond verte <br> <u>Exemple:</u>  <br> Ecrivez : Hello [World] ! <br> Obtenez: Hello <span class="color_helper">World</span> !</p>
                </div>
                <form class="container" action="{{route('independant.update',$independant)}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                  <div class="card-body container">
                    <div class="form-group">
                        <label for="banniere_text">Text de la banniere*</label>
                        <input name="banniere_text" type="text" class="form-control @error('banniere_text') is-invalid @enderror" id="banniere_text" value="{{ old('banniere_text',$independant->banniere_text) }}" placeholder="Text de la banniere*">
                        @error('banniere_text')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="presentation_titre">Titre de la section Presentation*</label>
                        <input name="presentation_titre" type="text" class="form-control @error('presentation_titre') is-invalid @enderror" id="presentation_titre" value="{{ old('presentation_titre',$independant->presentation_titre) }}" placeholder="Titre de la section Presentation*">
                        @error('presentation_titre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="presentation_text_un">Text de gauche dans la section Presentation	</label>
                        <input name="presentation_text_un" type="text" class="form-control @error('presentation_text_un') is-invalid @enderror" id="presentation_text_un" value="{{ old('presentation_text_un',$independant->presentation_text_un) }}" placeholder="Text de gauche dans la section Presentation">
                        @error('presentation_text_un')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="presentation_text_deux">Text de gauche dans la section Presentation	</label>
                        <input name="presentation_text_deux" type="text" class="form-control @error('presentation_text_deux') is-invalid @enderror" id="presentation_text_deux" value="{{ old('presentation_text_deux',$independant->presentation_text_deux) }}" placeholder="Text de gauche dans la section Presentation">
                        @error('presentation_text_deux')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="presentation_btn">Affichage du bouton dans la section Presentation</label>
                        <input name="presentation_btn" type="checkbox" class="form-control @error('presentation_btn') is-invalid @enderror" id="presentation_btn" value="{{ old('presentation_btn',$independant->presentation_btn) }}" @if (old('presentation_btn',$independant->presentation_btn))
                        checked
                    @endif value='1' >
                        @error('presentation_btn')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="video_url">Lien de la video	</label>
                        <input name="video_url" type="text" class="form-control @error('video_url') is-invalid @enderror" id="video_url" value="{{ old('video_url',$independant->video_url) }}" placeholder="Lien de la video">
                        @error('video_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
        
        
                    <div class="form-group">
                        <label for="video_img">Miniature de la video	</label>
                        <input name="video_img" type="file" class="form-control @error('video_img') is-invalid @enderror" id="video_img" >
                        @error('video_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="testimonials_titre">Titre de la section Testimonials*</label>
                        <input name="testimonials_titre" type="text" class="form-control @error('testimonials_titre') is-invalid @enderror" id="testimonials_titre" value="{{ old('testimonials_titre',$independant->testimonials_titre) }}" placeholder="Titre de la section Testimonials*">
                        @error('testimonials_titre')
                        <span class="invalid-feedback" testimonials_titre="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="services_titre">Titre de la section Services*	</label>
                        <input name="services_titre" type="text" class="form-control @error('services_titre') is-invalid @enderror" id="services_titre" value="{{ old('services_titre',$independant->services_titre) }}" placeholder="Titre de la section Services*">
                        @error('services_titre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="team_titre">Titre de la section Team*	</label>
                        <input name="team_titre" type="text" class="form-control @error('team_titre') is-invalid @enderror" id="team_titre" value="{{ old('team_titre',$independant->team_titre) }}" placeholder="Titre de la section Team*">
                        @error('team_titre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="promotion_titre">Titre de la section Promotion*		</label>
                        <input name="promotion_titre" type="text" class="form-control @error('promotion_titre') is-invalid @enderror" id="promotion_titre" value="{{ old('promotion_titre',$independant->promotion_titre) }}" placeholder="Titre de la section Promotion*	">
                        @error('promotion_titre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="promotion_text">Texte de la section Promotion			</label>
                        <input name="promotion_text" type="text" class="form-control @error('promotion_text') is-invalid @enderror" id="promotion_text" value="{{ old('promotion_text',$independant->promotion_text) }}" placeholder="Texte de la section Promotion">
                        @error('promotion_text')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="feature_titre">Titre de la section Feature	</label>
                        <input name="feature_titre" type="text" class="form-control @error('feature_titre') is-invalid @enderror" id="feature_titre" value="{{ old('feature_titre',$independant->feature_titre) }}" placeholder="Titre de la section Feature">
                        @error('feature_titre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
      


                </div>
            
            
                  <!-- /.card-body -->
            
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                    <a href="{{route('independant.index')}}" class="btn btn-danger">Annuler</a>
                  </div>
                </form>
              </div>
            </div>
        
        









@stop