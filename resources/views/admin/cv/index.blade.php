@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">CV</h2>

                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Liste</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>user</th>
                                <th>langue</th>
                                <th>titre</th>
                                <th>sujet</th>
                                <th>nom compétence</th>
                                <th>expérience</th>
                                <th>compétence linguistique</th>
                                <th>intérêt</th>
                                <th>cv</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>user</th>
                                <th>langue</th>
                                <th>titre</th>
                                <th>sujet</th>
                                <th>nom compétence</th>
                                <th>expérience</th>
                                <th>compétence linguistique</th>
                                <th>intérêt</th>
                                <th>cv</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($cv as $row)
                                <tr id="cv" class="cv_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->user->email}}</td>
                                    <td>{{$row->langue->label}}</td>
                                    <td>{{$row->moi->titre}}</td>
                                    <td>{{$row->formation->sujet}}</td>
                                    <td>{{$row->competence->nom}}</td>
                                    <td>{{$row->experience->titre}}</td>
                                    <td>{{$row->competenceLinguistique->titre}}</td>
                                    <td>{{$row->interetLoisir->titre}}</td>
                                    <td>{{mb_strimwidth($row->titre, 0, 100, '...')}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        <a href="{{route('cv.show', $row->id)}}" class="ico_show"><i
                                                    class="fa fa-eye fa-2x"></i></a>
                                        <a href="{{route('cv.edit', $row->id)}}" class="ico_edit"><i
                                                    class="fa fa-edit fa-2x"></i></a>

                                        {!! Form::open(['route'=>['cv.destroy', ':CV_ID'], 'method' => 'DEL', 'id' => 'form-cv-delete']) !!}
                                        <a class="ico_delete cv_delete"><i class="fa fa-trash fa-2x"></i></a>
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