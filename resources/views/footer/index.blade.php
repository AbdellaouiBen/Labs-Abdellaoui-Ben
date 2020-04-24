@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Section footer</h1>
@stop

@section('content')

<table class="table table-striped table-dark container">
    <thead>
     
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
