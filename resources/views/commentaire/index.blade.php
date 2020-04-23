@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">commentaires </h1>
@stop

@section('content')


<div class="card-body">
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table style=" border: 2px solid #6922b4" id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                    aria-describedby="example2_info">
                    <thead style="background-color: #2be6ab;">
                        <tr role="row" >
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Commentaire</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Article</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Auteur</th>
                           
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Action</th>
                            </tr>
                    </thead>
                    <tbody >
                        @foreach ($commentaires as $commentaire)
                        <tr role="row" class="">
                            <td tabindex="0" class="sorting_1">{{ucfirst($commentaire->commentaire)}}</td>
                            <td>{{$commentaire->article->titre}}</td>
                            <td>{{$commentaire->user->name}} {{$commentaire->user->firstname}}</td>
                            <td class="row">
                                <a class="btn btn-warning col-12" href="{{route('commentaire.edit',$commentaire)}}">Modifier</a> 
                                <form action="{{route('commentaire.destroy',$commentaire)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger col-12" href="">Supprimer</button>
                                </form>  

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Nom</th>
                            <th rowspan="1" colspan="1">Email</th>
                            <th rowspan="1" colspan="1">role</th>
                            <th rowspan="1" colspan="1">image</th>
                            <th rowspan="1" colspan="1">description</th>
                            <th rowspan="1" colspan="1">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        </div>
    </div>
</div>

@stop
