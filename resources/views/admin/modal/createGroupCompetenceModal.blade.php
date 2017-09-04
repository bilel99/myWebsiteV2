<div id="modalGroup" tabindex="-1" class="modal fade" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Groupe compétence - Create -</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'post', 'url' => route('admin.store_group')]) !!}

                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('nom_groupe', 'nom groupe * :', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {!! Form::text('nom_groupe', '', array('class'=>'form-control', 'name'=>'nom_groupe', 'id'=>'nom_groupe', 'placeholder' => 'Nom du groupe')) !!}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('status', 'Status * :', array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <select name="status" id="status" class="form-control">
                                <option value="actif">actif</option>
                                <option value="innactif">innactif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" name="submit" id="submit" class="form-control btn btn-register" value="Save">
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