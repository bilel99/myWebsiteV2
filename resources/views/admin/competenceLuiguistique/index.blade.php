@extends('admin.layout.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <h2 class="page-title">Intêret Loisir</h2>

                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Liste</div>
                    <div class="panel-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>titre</th>
                                <th>loisir</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>titre</th>
                                <th>loisir</th>
                                <th>created_at</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($interet as $row)
                                <tr id="interet" class="interet_{{$row->id}}" data-id="{{$row->id}}">
                                    <td>{{$row->titre}}</td>
                                    <td>{{$row->loisir}}</td>
                                    <td>{{$row->getCreateddateAttribute()}}</td>

                                    <td>
                                        <!-- Action -->
                                        <a href="{{route('InteretLoisir.edit', $row->id)}}" class="ico_edit"><i
                                                    class="fa fa-edit fa-2x"></i></a>

                                        {!! Form::open(['route'=>['InteretLoisir.destroy', ':INTERET_ID'], 'method' => 'DEL', 'id' => 'form-interet-delete']) !!}
                                        <a class="ico_delete interet_delete"><i class="fa fa-trash fa-2x"></i></a>
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