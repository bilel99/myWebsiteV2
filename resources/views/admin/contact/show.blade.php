@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Contact</h2>

            <!-- Information utilisateur -->
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks fa-2x">&nbsp;</i>information général</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>email</p>
                            <p>sujet</p>
                            <p>langue</p>
                            <p>Crée le </p>
                        </div>

                        <div class="col-md-6">
                            <p id="to-copy">
                                {{$contact->email === null ? 'NULL' : $contact->email}}&nbsp;
                                <button id="copy-button" class="btn btn-default btn-xs" onclick="copyToClipboard('to-copy')">
                                    <i class="fa fa-clipboard"></i>
                                </button>
                            </p>
                            <p>{{$contact->sujet === null ? 'NULL' : $contact->sujet}}</p>
                            <p>{{$contact_langue->langue->label === null ? 'NULL' : $contact_langue->langue->label}}</p>
                            <p>{{$contact->created_at === null ? 'NULL' : $contact->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHRASE -->
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-pencil-square fa-2x">&nbsp;</i>Contenue</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <p><b>{{$contact->text === null ? 'NULL' : $contact->text}}</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop