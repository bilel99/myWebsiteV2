@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création Intêret loisir</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Création</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'post', 'url' => route('InteretLoisir.store')]) !!}

                            <!-- Création champ titre -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('titre', 'Titre * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('titre', '', array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre',  'value'=>old('titre'))) !!}
                                </div>
                            </div>

                            <!-- Création champ text textarea -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('loisir', 'Loisir * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="loisir" id="loisir" cols="30" rows="10" class="form-control">
                                        {{old('loisir')}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <input type="submit" name="submit" id="submit" class="form-control btn btn-register" value="Create">
                                    </div>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop