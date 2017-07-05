@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Les Phrases culte</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Liste des phrases</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>langue</th>
                            <th>text</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>langue</th>
                            <th>text</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($phraseculte as $row)
                            <tr id="phraseculte" class="phraseculte_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->langue->label}}</td>
                                <td>{{mb_strimwidth($row->text, 0, 100, '...')}}</td>
                                <td>{{$row->getCreateddateAttribute()}}</td>
                                <td>
                                    <!-- Action -->
                                    <a href="{{route('phraseculte.show', $row->id)}}" class="ico_show"><i class="fa fa-eye fa-2x"></i></a>
                                    <a href="{{route('phraseculte.edit', $row->id)}}" class="ico_edit"><i class="fa fa-edit fa-2x"></i></a>

                                    {!! Form::open(['route'=>['phraseculte.destroy', ':PHRASECULTE_ID'], 'method' => 'DEL', 'id' => 'form-phraseculte-delete']) !!}
                                    <a class="ico_delete phraseculte_delete"><i class="fa fa-trash fa-2x"></i></a>
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