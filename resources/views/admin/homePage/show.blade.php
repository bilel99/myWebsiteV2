@extends('admin.layout.home')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Home Page</h2>

            <!-- Information utilisateur -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user fa-2x">&nbsp;</i>information général</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-6">
                            <p>titre</p>
                            <p>description</p>
                            <p>apropos</p>
                            <p>user</p>
                            <p>langue</p>
                            <p>Crée le </p>
                        </div>

                        <div class="col-md-6">
                            <p>{{$homePage->titre === null ? 'NULL' : $homePage->titre}}</p>
                            <p>{{$homePage->description === null ? 'NULL' : $homePage->description}}</p>
                            <p>{{$homePage->apropos === null ? 'NULL' : $homePage->apropos}}</p>
                            <p>{{$homePage->user->email === null ? 'NULL' : $homePage->user->email}}</p>
                            <p>{{$homePage->langue->label === null ? 'NULL' : $homePage->langue->label}}</p>
                            <p>{{$homePage->created_at === null ? 'NULL' : $homePage->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Avatar -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-picture-o fa-2x">&nbsp;</i>Avatar</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            {!! Html::image($homePage->image, 'image', array('class' => 'img-circle img-responsive', 'alt'=>'image -> homePage')) !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop