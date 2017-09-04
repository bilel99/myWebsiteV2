@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition Intêret Loisir Id {{$InteretLoisir->id}}</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('InteretLoisir.update', $InteretLoisir->id)]) !!}

                            <!-- Modification champ -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('titre', 'titre * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('titre', $InteretLoisir->titre, array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre')) !!}
                                </div>
                            </div>

                            <!-- Modification champ text textarea -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('loisir', 'loisir * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="loisir" id="loisir" cols="30" rows="10" class="form-control">
                                        {{$InteretLoisir->loisir}}
                                    </textarea>
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