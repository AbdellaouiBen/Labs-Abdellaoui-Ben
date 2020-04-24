@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Section contact</h1>
@stop

@section('content')

 



<table class="table table-striped table-dark container">
    <thead>
     
            <th > </th>

      
    </thead> 
    <tbody>
            
        <tr>
            <th class="border border-dark" scope="col">Titre</th>
            <th class="border border-dark">{{$contact->titre}} </th> 
        </tr> 
        <tr>
            <th class="border border-dark" scope="col">Texte</th>
            <td class="border border-dark"><p class="text-break">{{$contact->text}}</p></td> 
        </tr>
        <tr>
            <th class="border border-dark" scope="col">Sous titre</th>
            <td class="border border-dark">{{$contact->sous_titre}}</td> 
        </tr>
         <tr>
            <th class="border border-dark" scope="col">Ligne haute de l'adresse</th>
            <td class="border border-dark">{{$contact->adress_un}}</td> 
        </tr>
         <tr>
            <th class="border border-dark" scope="col">Ligne basse de l'adresse</th>
            <td class="border border-dark">{{$contact->adress_deux}}</td> 
        </tr>
         <tr>
            <th class="border border-dark" scope="col">Numero de télephone</th>
            <td class="border border-dark">{{$contact->tel}}</td> 
        </tr>
         <tr>
            <th class="border border-dark" scope="col">Adresse email</th>
            <td class="border border-dark">{{$contact->email}}</td> 
        </tr>
        
        <tr>
            <th  class="border border-dark"scope="col">Action</th>
            <td class="border border-dark">              
                <div class=" mb-2">
                    <a  class="  btn btn-warning  " href="{{route('contact.edit',$contact)}}">Modifier<i class="fas fa-pencil-alt"></i></a> 
                </div>
      
            
            </td>
        </tr>
                
  
    </tbody>
  </table> 












@stop

