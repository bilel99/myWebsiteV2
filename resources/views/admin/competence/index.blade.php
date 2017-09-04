@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">Compétence</h2>

                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Liste</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>groupe</th>
                                <th>titre</th>
                                <th>savoir</th>
                                <th>niveau</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>groupe</th>
                                <th>titre</th>
                                <th>savoir</th>
                                <th>niveau</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($competence as $row)
                                <tr id="competence" class="competence_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->group->nom_groupe}}</td>
                                    <td>{{$row->titre}}</td>
                                    <td>{{$row->savoir}}</td>
                                    <td>{{$row->niveau}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        <a href="{{route('competence.edit', $row->id)}}" class="ico_edit"><i
                                                    class="fa fa-edit fa-2x"></i></a>

                                        {!! Form::open(['route'=>['competence.destroy', ':COMPETENCE_ID'], 'method' => 'DEL', 'id' => 'form-competence-delete']) !!}
                                        <a class="ico_delete competence_delete"><i class="fa fa-trash fa-2x"></i></a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- GROUPE COMPETENCE -->
                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading" style="float: right; margin-top: -2px">
                        <button type="button" class="btn btn-primary btn-xs col-md-12" data-toggle="modal" data-target="#modalGroup"><i class="fa fa-plus"></i></button>
                        @include('admin.modal.createGroupCompetenceModal')
                    </div>
                    <div class="panel-heading">Liste</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>nom groupe</th>
                                <th>status</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>nom groupe</th>
                                <th>status</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($group as $row)
                                <tr id="group" class="group_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->nom_groupe}}</td>
                                    <td>{{$row->status}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        {!! Form::open(['route'=>['admin.destroy_group', ':GROUP_ID'], 'method' => 'DEL', 'id' => 'form-group-delete']) !!}
                                        <a class="ico_delete group_delete"><i class="fa fa-trash fa-2x"></i></a>
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