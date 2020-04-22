@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
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


<div class="container">
    <div class="mb-5 container">
        <div class="text-center">
                
            <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-danger rounded">My profil </h1>
        </div>
        <table class="table table-striped table-secondary">
            <thead class="bg-dark">
                <tr>
                    
                    <th  colspan="2" scope="row" class="text-center">Mettez les caractères souhaité entre '[' et ']' dans les section contanant une '*' afin de le faire apparaitre en bleu avec une couleur de fond verte <br> <u>Exemple:</u>  <br> Ecrivez : Hello [World] ! <br> Obtenez: Hello <span class="color_helper">World</span> !</th>
                   
                </tr>
            </thead> 
            <tbody>
                
                <tr>   
                    <th scope="row" class="text-center border border-dark">banniere_text*</th>
                    <td class="text-center border border-dark">{{$independant->banniere_text}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">presentation_titre*</th>
                    <td class="text-center border border-dark">{{$independant->presentation_titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">presentation_text_un</th>
                    <td class="text-center border border-dark">{{$independant->presentation_text_un}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">presentation_text_deux</th>
                    <td class="text-center border border-dark">{{$independant->presentation_text_deux}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">presentation_btn</th>
                    <td class="text-center border border-dark">@if ($independant->presentation_btn)bouton affiché @else Bouton pas affiché@endif</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">video_img</th>
                    <td class="text-center border border-dark"><img class="w-25" src="{{asset("storage/".$independant->video_img)}}" alt=""></td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">video_url</th>
                    <td class="text-center border border-dark"><a href="{{$independant->video_url}}">{{$independant->video_url}}</a></td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">testimonials_titre*</th>
                    <td class="text-center border border-dark">{{$independant->testimonials_titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">services_titre*</th>
                    <td class="text-center border border-dark">{{$independant->services_titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">team_titre*</th>
                    <td class="text-center border border-dark">{{$independant->team_titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">promotion_titre*</th>
                    <td class="text-center border border-dark">{{$independant->promotion_titre}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">promotion_text</th>
                    <td class="text-center border border-dark">{{$independant->promotion_text}}</td>
                </tr>
                <tr> 
                    <th scope="col" class="text-center border border-dark">feature_titre*</th>
                    <td class="text-center border border-dark">{{$independant->feature_titre}}</td>
                </tr>
                <tr> 
                    <td colspan="2" class="text-center border border-dark">  
                        <a class="btn btn-warning " href="{{route('independant.edit',$independant)}}">edit</a>   
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop
