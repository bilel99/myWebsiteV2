@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition Compétence {{$competence->id}}</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('competence.update', $competence->id)]) !!}

                            <!-- SELECT group -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('group_id', 'group * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('group_id', $group, $competence->group_id, ['class'=>'form-control']) !!}
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
                                    {!! Form::text('titre', $competence->titre, array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre')) !!}
                                </div>
                            </div>
                            <!-- Modification champ description -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('savoir', 'savoir * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea name="savoir" id="savoir" cols="60" rows="10" class="form-control">{{$competence->savoir}}</textarea>
                                </div>
                            </div>

                            <!-- SELECT niveau -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('niveau', 'niveau * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <select name="niveau" id="niveau" class="form-control">
                                        <option value="{{$competence->niveau}}" selected>{{$competence->niveau}}</option>
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