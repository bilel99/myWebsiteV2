@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création Compétence</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Création</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'post', 'url' => route('competence.store')]) !!}

                            <!-- SELECT GROUPE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('group_id', 'Groupe * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('group_id', $group, '', ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <!-- Création champ titre -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('titre', 'Titre * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('titre', '', array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre',  'value'=>old('titre'))) !!}
                                </div>
                            </div>
                            <!-- Création champ savoir -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('savoir', 'Savoir * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="savoir" id="savoir" cols="60" rows="10" class="form-control">{{old('savoir')}}</textarea>
                                </div>
                            </div>
                            <!-- Création champ niveau -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('niveau', 'niveau * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <select name="niveau" id="niveau" class="form-control">
                                        <option value="faible">faible</option>
                                        <option value="scolaire">scolaire</option>
                                        <option value="moyen">moyen</option>
                                        <option value="fort">fort</option>
                                        <option value="excellent">excellent</option>
                                    </select>
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