@extends('admin.layout.home')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edition Langue Id {{$langue->id}}</h2>

                <!-- Edition -->
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edition</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['method' => 'put', 'url' => route('langue.update', $langue->id)]) !!}

                            <!-- Modification champ Label -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('label', 'Label * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('label', $langue->label, array('class'=>'form-control', 'name'=>'label', 'id'=>'label', 'placeholder' => 'Votre label')) !!}
                                </div>
                            </div>
                            <!-- Modification champ Code -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('code', 'Code * :', array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    {!! Form::text('code', $langue->code, array('class'=>'form-control', 'name'=>'code', 'id'=>'code', 'placeholder' => 'Votre code')) !!}
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