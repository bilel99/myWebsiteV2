@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création formation</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Création</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'post', 'url' => route('formation.store')]) !!}

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

                            <!-- Création champ date -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('date_debut', 'Date début * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::date('date_debut', '', array('class'=>'form-control', 'name'=>'date_debut', 'id'=>'date_debut', 'placeholder' => 'Votre date de debut',  'value'=>old('date_debut'))) !!}
                                </div>
                            </div>

                            <!-- Création champ date -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('date_fin', 'Date fin * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::date('date_fin', '', array('class'=>'form-control', 'name'=>'date_fin', 'id'=>'date_fin', 'placeholder' => 'Votre date de fin',  'value'=>old('date_fin'))) !!}
                                </div>
                            </div>

                            <!-- Création champ textarea -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('sujet', 'Sujet * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="sujet" id="sujet" cols="60" rows="10" class="form-control">{{old('sujet')}}</textarea>
                                </div>
                            </div>

                            <!-- Création champ text -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('ecole', 'Ecole * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('ecole', '', array('class'=>'form-control', 'name'=>'ecole', 'id'=>'ecole', 'placeholder' => 'Votre ecole',  'value'=>old('ecole'))) !!}
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