@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Gestion Page Home</h2>

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
                            <th>description</th>
                            <th>apropos</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>user</th>
                            <th>langue</th>
                            <th>titre</th>
                            <th>description</th>
                            <th>apropos</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($homePage as $row)
                            <tr id="homepage" class="homepage_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->user->email}}</td>
                                <td>{{$row->langue->label}}</td>
                                <td>{{$row->titre}}</td>
                                <td>{{mb_strimwidth($row->description, 0, 100, '...')}}</td>
                                <td>{{mb_strimwidth($row->apropos, 0, 100, '...')}}</td>
                                <td>{{$row->getCreateddateAttribute()}}</td>

                                <td>
                                    <!-- Action -->
                                    <a href="{{route('homePage.show', $row->id)}}" class="ico_show"><i class="fa fa-eye fa-2x"></i></a>
                                    <a href="{{route('homePage.edit', $row->id)}}" class="ico_edit"><i class="fa fa-edit fa-2x"></i></a>

                                    {!! Form::open(['route'=>['homePage.destroy', ':HOMEPAGE_ID'], 'method' => 'DEL', 'id' => 'form-homepage-delete']) !!}
                                    <a class="ico_delete homepage_delete"><i class="fa fa-trash fa-2x"></i></a>
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