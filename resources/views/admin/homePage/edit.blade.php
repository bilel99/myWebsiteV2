@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition Home Page</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('homePage.update', $homePage->id), 'enctype' => 'multipart/form-data', 'files' => true ]) !!}

                                    <!-- SELECT LANGUE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('langue_id', 'Langue * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('langue_id', $langue, $homePage->langue_id, ['class'=>'form-control']) !!}
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
                                    {!! Form::select('user_id', $user, $homePage->user_id, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <!-- Modification champ titre -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('titre', 'Titre * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('titre', $homePage->titre, array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre')) !!}
                                </div>
                            </div>
                            <!-- Modification champ description -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('description', 'Description * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('description', $homePage->description, array('class'=>'form-control', 'name'=>'description', 'id'=>'description', 'placeholder' => 'Votre description')) !!}
                                </div>
                            </div>
                            <!-- Modification champ a propos -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('apropos', 'A propos * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('apropos', $homePage->apropos, array('class'=>'form-control', 'name'=>'apropos', 'id'=>'apropos', 'placeholder' => 'Votre à propos')) !!}
                                </div>
                            </div>
                            <!-- Modification champ Image -->
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

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <input type="submit" name="submit" id="submit" class="form-control btn btn-register" value="Update">
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