@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création compétence linguistique</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Création</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'post', 'url' => route('competenceluiguistique.store')]) !!}

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

                            <!-- Création champ langue -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('langue', 'Langue * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('langue', '', array('class'=>'form-control', 'name'=>'langue', 'id'=>'langue', 'placeholder' => 'Votre langue',  'value'=>old('langue'))) !!}
                                </div>
                            </div>

                            <!-- Création champ select -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('niveau', 'Niveau * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="niveau" id="niveau" class="form-control">
                                        <option value="faible">faible</option>
                                        <option value="scolaire">scolaire</option>
                                        <option value="bon">bon</option>
                                        <option value="natal">natal</option>
                                        <option value="technique">technique</option>
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