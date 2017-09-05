@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">Compétence luiguistique</h2>

                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Liste</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>titre</th>
                                <th>langue</th>
                                <th>niveau</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>titre</th>
                                <th>langue</th>
                                <th>niveau</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($competenceLuiguistique as $row)
                                <tr id="competenceLuiguistique" class="competenceLuiguistique_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->titre}}</td>
                                    <td>{{$row->langue}}</td>
                                    <td>{{$row->niveau}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        <a href="{{route('competenceluiguistique.edit', $row->id)}}" class="ico_edit"><i
                                                    class="fa fa-edit fa-2x"></i></a>

                                        {!! Form::open(['route'=>['competenceluiguistique.destroy', ':COMPETENCELINGUISTIQUE_ID'], 'method' => 'DEL', 'id' => 'form-competencelinguistique-delete']) !!}
                                        <a class="ico_delete competenceluiguistique_delete"><i class="fa fa-trash fa-2x"></i></a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop