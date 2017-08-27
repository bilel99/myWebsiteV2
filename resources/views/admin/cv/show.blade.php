@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Portfolios {{$portfolio->id}}</h2>

            <!-- Information utilisateur -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-paperclip fa-2x">&nbsp;</i>information général</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>titre</p>
                            <p>role</p>
                            <p>webdesign</p>
                            <p>client</p>
                            <p>date_debut</p>
                            <p>date_fin</p>
                            <p>user</p>
                            <p>langue</p>
                            <p>Crée le </p>
                        </div>

                        <div class="col-md-6">
                            <p>{{$portfolio->titre === null ? 'NULL' : $portfolio->titre}}</p>
                            <p>{{$portfolio->role === null ? 'NULL' : $portfolio->role}}</p>
                            <p>{{$portfolio->webdesign === null ? 'NULL' : $portfolio->webdesign}}</p>
                            <p>{{$portfolio->client === null ? 'NULL' : $portfolio->client}}</p>
                            <p>{{$portfolio->date_debut === null ? 'NULL' : $portfolio->date_debut}}</p>
                            <p>{{$portfolio->date_fin === null ? 'NULL' : $portfolio->date_fin}}</p>
                            <p>{{$portfolio->user->email === null ? 'NULL' : $portfolio->user->email}}</p>
                            <p>{{$portfolio->langue->label === null ? 'NULL' : $portfolio->langue->label}}</p>
                            <p>{{$portfolio->created_at === null ? 'NULL' : $portfolio->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Images -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-picture-o fa-2x">&nbsp;</i>Avatar</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            {!! Html::image($portfolio->image1, 'image1', array('class' => 'img-circle img-responsive', 'alt'=>'image1 -> portfolios')) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Html::image($portfolio->image2, 'image2', array('class' => 'img-circle img-responsive', 'alt'=>'image2 -> portfolios')) !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-rocket fa-2x">&nbsp;</i>Action</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i><span>&nbsp;édition</span></a>
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['route'=>['portfolios.destroy', $portfolio->id], 'method' => 'DEL', 'id' => 'form-portfolios-delete']) !!}
                            <a class="btn btn-danger btn-sm portfolios_delete"><i class="fa fa-trash"></i><span>&nbsp;Suppression</span></a>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-text-width fa-2x">&nbsp;</i>Description</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            {!! $portfolio->description !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop