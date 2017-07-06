@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Création Portfolio</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Création</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'post', 'url' => route('portfolios.store'), 'enctype' => 'multipart/form-data', 'files' => true ]) !!}

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
                            <!-- Création champ description -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('description', 'Description * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="description" id="description" cols="60" rows="10" class="form-control">{{old('description')}}</textarea>
                                </div>
                            </div>
                            <!-- Création champ rôle -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('role', 'Rôle * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('role', '', array('class'=>'form-control', 'name'=>'role', 'id'=>'role', 'placeholder' => 'Votre role',  'value'=>old('role'))) !!}
                                </div>
                            </div>
                            <!-- Création champ webdesign -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('webdesign', 'Webdesign * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('webdesign', '', array('class'=>'form-control', 'name'=>'webdesign', 'id'=>'webdesign', 'placeholder' => 'Votre webdesign',  'value'=>old('webdesign'))) !!}
                                </div>
                            </div>
                            <!-- Création champ client -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('client', 'Client * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('client', '', array('class'=>'form-control', 'name'=>'client', 'id'=>'client', 'placeholder' => 'Votre client',  'value'=>old('client'))) !!}
                                </div>
                            </div>
                            <!-- Création champ date_debut -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('date_debut', 'Date debut * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::date('date_debut', '', array('class'=>'form-control', 'name'=>'date_debut', 'id'=>'date_debut', 'placeholder' => 'Votre date de debut',  'value'=>old('date_debut'))) !!}
                                </div>
                            </div>
                            <!-- Création champ date_fin -->
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

                            <!-- Création champ image1 -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('image1', 'Image 1 * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::file('image1', ["class"=>"form-control",  "value"=>old('image1')]) !!}
                                </div>
                            </div>
                            <!-- Création champ image2 -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('image2', 'Image 2 * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::file('image2', ["class"=>"form-control",  "value"=>old('image2')]) !!}
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