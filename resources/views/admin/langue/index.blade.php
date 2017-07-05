@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Langues</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Liste des langues</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>label</th>
                            <th>code</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>label</th>
                            <th>code</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($langue as $row)
                            <tr id="langue" class="langue_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->label}}</td>
                                <td>{{strtoupper($row->code)}}</td>
                                <td>{{$row->getCreateddateAttribute()}}</td>
                                <td>
                                    <!-- Action -->
                                    <a href="{{route('langue.edit', $row->id)}}" class="ico_edit"><i class="fa fa-edit fa-2x"></i></a>
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