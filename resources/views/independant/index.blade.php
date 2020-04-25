@extends('adminlte::page')

@section('title', 'Elements independants')

@section('content_header')
@stop

@section('content')

@section('css')
<style>.color_helper{
   background: #2be6ab;
   padding: 0 3px 5px;
   display: inline-block;
   color: #0b1033;
}; </style>
    
@endsection

<table class="table table-striped table-dark container">
    <thead>
        <tr class="text-center">
            <th colspan="6" class="">
                <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Elements independants</span>  </h1> 
            </th>
        </tr>
            <th  colspan="2" scope="row" class="text-center">Mettez les caractères souhaité entre '[' et ']' dans les section contanant une '*' afin de le faire apparaitre en bleu avec une couleur de fond verte <br> <u>Exemple:</u>  <br> Ecrivez : Hello [World] ! <br> Obtenez: Hello <span class="color_helper">World</span> !</th>

      
    </thead> 
    <tbody>
            
        <tr>
            <th scope="col">Texte dans la banniere*</th>
            <th>{{$independant->banniere_text}} </th> 
        </tr> 
        <tr>
            <th scope="col">Titre de la section Presentation*</th>
            <td>{{$independant->presentation_titre}}</td> 
        </tr>
        <tr>
            <th scope="col">Text de gauche dans la section Presentation</th>
            <td>{{$independant->presentation_text_un}}</td> 
        </tr>
         <tr>
            <th scope="col">Text de gauche dans la section Presentation</th>
            <td>{{$independant->presentation_text_deux}}</td> 
        </tr>
        <tr>
            <th scope="col">Affichage du bouton dans la section Presentation</th>
            <td>@if ($independant->presentation_btn) Le bouton est affiché @else Le bouton ne sera pas affiché@endif</td> 
        </tr>
         <tr>
            <th scope="col">Miniature de la video</th>
            <td><img class="w-25" src="{{asset("storage/".$independant->video_img)}}" alt=""></td> 
        </tr>
        <tr>
            <th scope="col">Lien de la video</th>
            <td><a href="{{$independant->video_url}}">{{$independant->video_url}}</a></td> 
        </tr>
         <tr>
            <th scope="col">Titre de la section Testimonials*</th>
            <td>{{$independant->presentation_text_deux}}</td> 
        </tr>
         <tr>
            <th scope="col">Titre de la section Services*</th>
            <td>{{$independant->services_titre}}</td> 
        </tr>
         <tr>
            <th scope="col">Titre de la section Team*</th>
            <td>{{$independant->team_titre}}</td> 
        </tr>
         <tr>
            <th scope="col">Titre de la section Promotion*</th>
            <td>{{$independant->promotion_titre}}</td> 
        </tr>
         <tr>
            <th scope="col">Texte de la section Promotion</th>
            <td>{{$independant->promotion_text}}</td> 
        </tr>
         <tr>
            <th scope="col">Titre de la section Feature</th>
            <td>{{$independant->feature_titre}}</td> 
        </tr>
        <tr>
            <th scope="col">Action</th>
            <td>              
                <div class=" mb-2">
                    <a  class="  btn btn-warning  " href="{{route('independant.edit',$independant)}}">Modifier<i class="fas fa-pencil-alt"></i></a> 
                </div>
      
            
            </td>
        </tr>
                
  
    </tbody>
  </table> 

  @stop












