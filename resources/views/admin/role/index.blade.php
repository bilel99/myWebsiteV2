@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Gestion Rôles utilisateurs</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Liste des rôles</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>role</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>role</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($roleUsers as $row)
                            <tr id="roleUsers" class="roleUsers_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->role}}</td>
                                <td>{{$row->getCreateddateAttribute()}}</td>
                                <td>
                                    <!-- Action -->
                                    <button type="button" class="btn btn-primary col-md-12" data-toggle="modal" data-target="#modalRoles_{{$row->id}}">Update</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @foreach($roleUsers as $row)
                        @include('admin.modal.updateRoleModal')
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@stop