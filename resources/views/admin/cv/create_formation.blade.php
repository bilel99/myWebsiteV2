@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création CV</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel with-nav-tabs panel-primary">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">CV</a></li>
                                <li><a href="#tab2" data-toggle="tab">Formation</a></li>
                                <li><a href="#tab3" data-toggle="tab">Compétence</a></li>
                                <li><a href="#tab4" data-toggle="tab">Expérience</a></li>
                                <li><a href="#tab5" data-toggle="tab">Langue</a></li>
                                <li><a href="#tab6" data-toggle="tab">Intérêt</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'post', 'url' => route('cv.store'), 'enctype' => 'multipart/form-data', 'files' => true ]) !!}
                            <div class="tab-content">


                                <!-- Création champ text -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('titre_formation', 'Titre * :', array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        {!! Form::text('titre_formation', '', array('class'=>'form-control', 'name'=>'titre_formation', 'id'=>'titre_formation', 'placeholder' => 'Votre titre',  'value'=>old('titre_formation'))) !!}
                                    </div>
                                </div>

                                <!-- Création champ date -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('date_debut_formation', 'Date début * :', array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        {!! Form::date('date_debut_formation', '', array('class'=>'form-control', 'name'=>'date_debut_formation', 'id'=>'date_debut_formation', 'placeholder' => 'Votre date de debut',  'value'=>old('date_debut_formation'))) !!}
                                    </div>
                                </div>

                                <!-- Création champ date -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('date_fin_formation', 'Date fin * :', array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        {!! Form::date('date_fin_formation', '', array('class'=>'form-control', 'name'=>'date_fin_formation', 'id'=>'date_fin_formation', 'placeholder' => 'Votre date de fin',  'value'=>old('date_fin_formation'))) !!}
                                    </div>
                                </div>

                                <!-- Création champ textarea -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {!! Form::label('sujet_formation', 'Sujet * :', array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                            <textarea name="sujet_formation" id="sujet_formation" cols="60" rows="10"
                                                      class="form-control">{{old('sujet_formation')}}</textarea>
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
                                            <input type="submit" name="submit" id="submit"
                                                   class="form-control btn btn-register" value="Create">
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
