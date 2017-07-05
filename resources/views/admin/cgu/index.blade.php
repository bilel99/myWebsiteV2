@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">CGU</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Liste des cgu</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>langue</th>
                            <th>title</th>
                            <th>content</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>langue</th>
                            <th>title</th>
                            <th>content</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($cgu as $row)
                            <tr id="cgu" class="cgu_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->langue->label}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{mb_strimwidth($row->content, 0, 100, '...')}}</td>
                                <td>{{$row->getCreateddateAttribute()}}</td>
                                <td>
                                    <!-- Action -->
                                    <a href="{{route('cgu.show', $row->id)}}" class="ico_show"><i class="fa fa-eye fa-2x"></i></a>
                                    <a href="{{route('cgu.edit', $row->id)}}" class="ico_edit"><i class="fa fa-edit fa-2x"></i></a>
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