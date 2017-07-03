@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition utilisateur Id {{$user->id}}</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('user.update', $user->id)]) !!}

                            <!-- Select -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    {!! Form::label('role_id', 'Rôle * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    {!! Form::select('role_id', $role, $user->role_id, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <!-- Modification random des champs pseudo et password -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::text('pseudo', $user->pseudo, array('class'=>'form-control', 'name'=>'pseudo', 'id'=>'pseudo', 'placeholder' => 'Votre pseudo')) !!}
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <input type="button" name="random_pseudo" id="random_pseudo" class="form-control btn btn-default" value="random" onclick="javascript:generer_pseudo('pseudo');">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::text('password', $user->password, array('class'=>'form-control', 'name'=>'password', 'id'=>'password', 'placeholder' => 'Votre mot de passe')) !!}
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-4">
                                <div class="form-group">
                                    <input type="button" name="random_password" id="random_password" class="form-control btn btn-default" value="random" onclick="javascript:generer_password('password');">
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