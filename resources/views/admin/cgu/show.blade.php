@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Information CGU {{$cgu->id}}</h2>

            <!-- Information utilisateur -->
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks fa-2x">&nbsp;</i>information général</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>langue</p>
                            <p>Crée le </p>
                        </div>

                        <div class="col-md-6">
                            <p>{{$cgu->langue->label === null ? 'NULL' : $cgu->langue->label}}</p>
                            <p>{{$cgu->created_at === null ? 'NULL' : $cgu->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHRASE -->
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-pencil-square fa-2x">&nbsp;</i>CGU</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <p><b>{{$cgu->content === null ? 'NULL' : $cgu->content}}</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop