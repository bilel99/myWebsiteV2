<div id="modalRoles_{{$row->id}}" tabindex="-1" class="modal fade" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modification Rôles utilisateurs</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'put', 'url' => route('roleUser.update', $row->id)]) !!}

                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('role', 'Rôle * :', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            {!! Form::text('role', $row->role, array('class'=>'form-control', 'name'=>'role', 'id'=>'role', 'placeholder' => 'Votre rôle')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" name="submit" id="submit" class="form-control btn btn-register" value="Update">
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>