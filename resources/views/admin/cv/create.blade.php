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
                                <div class="tab-pane fade in active" id="tab1">
                                    <!-- SELECT LANGUE -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('langue_id', 'Langue * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::select('langue_id', $langue, '', ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <!-- SELECT USER -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('user_id', 'User * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::select('user_id', $user, '', ['class'=>'form-control']) !!}
                                        </div>
                                    </div>

                                    <!-- Création champ textarea -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('adresse', 'Adresse * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <textarea name="adresse" id="adresse" cols="60" rows="10"
                                                      class="form-control">{{old('adresse')}}</textarea>
                                        </div>
                                    </div>

                                    <!-- Création champ text -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('ville', 'Ville * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::text('ville', '', array('class'=>'form-control', 'name'=>'ville', 'id'=>'ville', 'placeholder' => 'Votre ville',  'value'=>old('ville'))) !!}
                                        </div>
                                    </div>

                                    <!-- Création champ select -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('situation', 'Situation * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select name="situation" id="situation" class="form-control">
                                                <option value="celibataire">Célibataire</option>
                                                <option value="marier">Marier</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Création champ text -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('nationalite', 'Nationalite * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::text('nationalite', '', array('class'=>'form-control', 'name'=>'nationalite', 'id'=>'nationalite', 'placeholder' => 'Votre nationalite',  'value'=>old('nationalite'))) !!}
                                        </div>
                                    </div>

                                    <!-- Création champ radio -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('permis', 'Permis * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="radio" class="form-control" name="permis" id="permis"
                                                   value="oui">Oui
                                            <input type="radio" class="form-control" name="permis" id="permis"
                                                   value="non">Non
                                        </div>
                                    </div>

                                    <!-- Création champ text -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('titre_cv', 'Titre * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::text('titre_cv', '', array('class'=>'form-control', 'name'=>'titre_cv', 'id'=>'titre_cv', 'placeholder' => 'Votre titre',  'value'=>old('titre_cv'))) !!}
                                        </div>
                                    </div>

                                    <!-- Création champ textarea -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('description_cv', 'Description * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <textarea name="description_cv" id="description_cv" cols="60" rows="10"
                                                      class="form-control">{{old('description_cv')}}</textarea>
                                        </div>
                                    </div>

                                    <!-- Création champ textarea -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('about_cv', 'About * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <textarea name="about_cv" id="about_cv" cols="60" rows="10"
                                                      class="form-control">{{old('about_cv')}}</textarea>
                                        </div>
                                    </div>

                                    <!-- Création champ text -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('numero', 'Numero * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::number('numero', '', array('class'=>'form-control', 'name'=>'numero', 'id'=>'numero', 'placeholder' => 'Votre numero',  'value'=>old('numero'))) !!}
                                        </div>
                                    </div>

                                    <!-- Création champ text -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('email_cv', 'Email * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::text('email_cv', '', array('class'=>'form-control', 'name'=>'email_cv', 'id'=>'email_cv', 'placeholder' => 'Votre email',  'value'=>old('email_cv'))) !!}
                                        </div>
                                    </div>

                                    <!-- Création champ image -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            {!! Form::label('image', 'Image * :', array('class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            {!! Form::file('image', ["class"=>"form-control",  "value"=>old('image')]) !!}
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="tab2">
                                    <a href="{{route('formation.create')}}" class="btn btn-default btn-xs col-xs-6 col-xs-offset-3">Ajouter une formation</a>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <a href="{{route('competence.create')}}" class="btn btn-default btn-xs col-xs-6 col-xs-offset-3">Ajouter une compétence</a>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <a href="{{route('experience.create')}}" class="btn btn-default btn-xs col-xs-6 col-xs-offset-3">Ajouter une expérience</a>
                                </div>
                                <div class="tab-pane fade" id="tab5">
                                    <a href="{{route('competenceluiguistique.create')}}" class="btn btn-default btn-xs col-xs-6 col-xs-offset-3">Ajouter une langue</a>
                                </div>
                                <div class="tab-pane fade" id="tab6">
                                    <a href="{{route('interetloisir.create')}}" class="btn btn-default btn-xs col-xs-6 col-xs-offset-3">Ajouter un intêret</a>
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