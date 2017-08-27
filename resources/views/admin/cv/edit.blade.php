@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition Portfolios {{$portfolio->id}}</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('portfolios.update', $portfolio->id), 'enctype' => 'multipart/form-data', 'files' => true ]) !!}

                            <!-- SELECT LANGUE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('langue_id', 'Langue * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('langue_id', $langue, $portfolio->langue_id, ['class'=>'form-control']) !!}
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
                                    {!! Form::select('user_id', $user, $portfolio->user_id, ['class'=>'form-control']) !!}
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
                                    {!! Form::text('titre', $portfolio->titre, array('class'=>'form-control', 'name'=>'titre', 'id'=>'titre', 'placeholder' => 'Votre titre')) !!}
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
                                    <textarea name="description" id="description" cols="60" rows="10" class="form-control">{{$portfolio->description}}</textarea>
                                </div>
                            </div>
                            <!-- Modification champ rôle -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('role', 'Rôle * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('role', $portfolio->role, array('class'=>'form-control', 'name'=>'role', 'id'=>'role', 'placeholder' => 'Votre role')) !!}
                                </div>
                            </div>
                            <!-- Modification champ webdesign -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('webdesign', 'Webdesign * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('webdesign', $portfolio->webdesign, array('class'=>'form-control', 'name'=>'webdesign', 'id'=>'webdesign', 'placeholder' => 'Votre webdesign')) !!}
                                </div>
                            </div>
                            <!-- Modification champ client -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('client', 'Client * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::text('client', $portfolio->client, array('class'=>'form-control', 'name'=>'client', 'id'=>'client', 'placeholder' => 'Votre client')) !!}
                                </div>
                            </div>
                            <!-- Modification champ date_debut -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('date_debut', 'Date debut * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::input('date', 'date_debut', ($portfolio->date_debut)?date('Y-m-d' , strtotime($portfolio->date_debut)):((Input::get('date_debut'))?:null), ["class"=>"form-control",  "value"=>old('date_debut')]) !!}
                                </div>
                            </div>
                            <!-- Modification champ date_fin -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('date_fin', 'Date fin * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::input('date', 'date_fin', ($portfolio->date_fin)?date('Y-m-d' , strtotime($portfolio->date_fin)):((Input::get('date_fin'))?:null), ["class"=>"form-control",  "value"=>old('date_fin')]) !!}
                                </div>
                            </div>

                            <!-- Modification champ image1 -->
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
                            <!-- Modification champ image2 -->
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