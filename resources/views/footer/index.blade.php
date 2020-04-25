@extends('adminlte::page')

@section('title', 'Section contact us')

@section('content_header')
@stop

@section('content')

<table class="table table-striped table-dark container">
    <thead>
        <tr class="text-center">
            <th colspan="4" class="">
                <h1><span class="text-black font-weight-bold bg-teal px-2 rounded">Section contact us</span>  </h1> 
            </th>
        </tr>
     
            <th class="border border-dark" scope="col">Text</th>
            <th class="border border-dark" scope="col">Text contenant le lien</th>
            <th class="border border-dark" scope="col">Le lien</th>
            <th  class="border border-dark"scope="col">Action</th>
    </thead> 
    <tbody>
        <tr>
            <th class="border border-dark">{{$footer->text}} </th> 
            <td class="border border-dark"><p class="text-break">{{$footer->text_link}}</p></td> 
            <td class="border border-dark"> <a href="{{$footer->link}}">{{$footer->link}}</a></td> 
            <td class="border border-dark">              
                <div class=" mb-2">
                    <a  class="  btn btn-warning  " href="{{route('footer.edit',$footer)}}">Modifier<i class="fas fa-pencil-alt"></i></a> 
                </div>
            </td>
        </tr>
    </tbody>
  </table> 



  @stop
