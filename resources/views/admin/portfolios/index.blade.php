@extends('admin.layout.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Portfolios</h2>




            <div class="raw">
                <div id="content">
                    @foreach($portfolios as $row)
                        <div class="item e2">
                            <a href="{{route('portfolios.show', $row->id)}}">
                                {!! Html::image($row->image1, 'image1', array('class' => ' img-responsive', 'alt'=>'image1 -> portfolios')) !!}

                                <div class="text2">
                                    <h3>{{$row->titre}}</h3>
                                    <p>{{mb_strimwidth($row->description, 0, 150, 'suite...')}}</p>
                                    <p>{{$row->getCreateddateAttribute($row->date_debut)}}</p>
                                </div>
                                <div class="line top"></div>
                                <div class="line bottom"></div>
                                <div class="line left"></div>
                                <div class="line right"></div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>





        </div>
    </div>
</div>

@stop