@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition compétence linguistique Id {{$competenceluiguistique->id}}</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('competenceluiguistique.update', $competenceluiguistique->id)]) !!}

                            <!-- Modification champ -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('titre', 'titre * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('titre', $competenceluiguistique->titre, array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre')) !!}
                                </div>
                            </div>

                            <!-- Modification champ -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('langue', 'langue * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('langue', $competenceluiguistique->langue, array('class'=>'form-control', 'name'=>'langue', 'id'=>'langue', 'placeholder' => 'Votre langue')) !!}
                                </div>
                            </div>

                            <!-- Modification champ select -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('niveau', 'Niveau * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="niveau" id="niveau" class="form-control">
                                        <option value="{{$competenceluiguistique->niveau}}">{{$competenceluiguistique->niveau}}</option>
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