@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Information {{substr($user->nom, 0, 1).' '.$user->prenom}}</h2>

            <!-- Information utilisateur -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user fa-2x">&nbsp;</i>information général</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>Pseudo</p>
                            <p>Nom</p>
                            <p>Prenom</p>
                            <p>Email</p>
                            <p>Date de naissance</p>
                            <p>Rôle</p>
                            <p>Crée le </p>
                        </div>

                        <div class="col-md-6">
                            <p>{{$user->pseudo === null ? 'NULL' : $user->pseudo}}</p>
                            <p>{{$user->nom === null ? 'NULL' : $user->nom}}</p>
                            <p>{{$user->prenom === null ? 'NULL' : $user->prenom}}</p>
                            <p>{{$user->email === null ? 'NULL' : $user->email}}</p>
                            <p>{{$user->date_naissance === null ? 'NULL' : $user->date_naissance}}</p>
                            <p>{{$user->role->role === null ? 'NULL' : $user->role->role}}</p>
                            <p>{{$user->created_at === null ? 'NULL' : $user->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Avatar -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-picture-o fa-2x">&nbsp;</i>Avatar</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            {!! Html::image($grav_url, 'avatar', array('class' => 'img-circle img-responsive', 'alt'=>'Avatar de '.$user->prenom)) !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop