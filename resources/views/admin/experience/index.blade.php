@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">Expérience</h2>

                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Liste</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>titre</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>sujet</th>
                                <th>description</th>
                                <th>contrat</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>titre</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>sujet</th>
                                <th>description</th>
                                <th>contrat</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($experience as $row)
                                <tr id="experience" class="experience_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->titre}}</td>
                                    <td>{{$row->date_debut}}</td>
                                    <td>{{$row->date_fin}}</td>
                                    <td>{{$row->sujet}}</td>
                                    <td>{{$row->description}}</td>
                                    <td>{{$row->contrat}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        <a href="{{route('experience.edit', $row->id)}}" class="ico_edit"><i
                                                    class="fa fa-edit fa-2x"></i></a>

                                        {!! Form::open(['route'=>['experience.destroy', ':EXPERIENCE_ID'], 'method' => 'DEL', 'id' => 'form-experience-delete']) !!}
                                        <a class="ico_delete experience_delete"><i class="fa fa-trash fa-2x"></i></a>
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