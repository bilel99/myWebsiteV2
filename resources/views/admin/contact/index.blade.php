@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Contact</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
                <div class="panel-heading">Listes</div>
                <div class="panel-body">
                    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>langue</th>
                            <th>email</th>
                            <th>sujet</th>
                            <th>text</th>
                            <th>done</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>langue</th>
                            <th>email</th>
                            <th>sujet</th>
                            <th>text</th>
                            <th>done</th>
                            <th>created_at</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($contact as $row)
                            <tr id="contact" class="contact_{{$row->id}}" data-id="{{$row->id}}">
                                <td>{{$row->langue->label}}</td>
                                <td id="to-copy">
                                    {{$row->email}}
                                    <button id="copy-button" class="btn btn-default btn-xs" onclick="copyToClipboard('to-copy')">
                                        <i class="fa fa-clipboard"></i>
                                    </button>
                                </td>
                                <td>{{mb_strimwidth($row->sujet, 0, 100, '...')}}</td>
                                <td>{{mb_strimwidth($row->text, 0, 100, '...')}}</td>
                                <td>
                                    {!! Form::open(['route'=>['contact.done', ':CONTACT_DONE_ID'], 'method' => 'DEL', 'id' => 'form-contact_done-delete']) !!}
                                        <a class="btn btn-default btn-xs contact_done_delete">
                                            @if($row->done === 0)
                                                <i id="status_button_done" class="fa fa-times"></i>
                                            @elseif($row->done === 1)
                                                <i id="status_button_done" class="fa fa-check"></i>
                                            @endif
                                        </a>
                                    {!! Form::close() !!}
                                </td>
                                <td>{{$row->getCreateddateAttribute()}}</td>

                                <td>
                                    <!-- Action -->
                                    <a href="{{route('contact.show', $row->id)}}" class="ico_show"><i class="fa fa-eye fa-2x"></i></a>

                                    {!! Form::open(['route'=>['contact.destroy', ':CONTACT_ID'], 'method' => 'DEL', 'id' => 'form-contact-delete']) !!}
                                    <a class="ico_delete contact_delete"><i class="fa fa-trash fa-2x"></i></a>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@stop