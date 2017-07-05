@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Information témoignage {{$temoignage->id}}</h2>

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
                            <p>{{$temoignage->langue->label === null ? 'NULL' : $temoignage->langue->label}}</p>
                            <p>{{$temoignage->created_at === null ? 'NULL' : $temoignage->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHRASE -->
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-pencil-square fa-2x">&nbsp;</i>Témoignage</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <p><b>{{$temoignage->text === null ? 'NULL' : $temoignage->text}}</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop