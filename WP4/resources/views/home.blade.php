@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <article class="main">
                        <a href="{{URL::to("/klanttoevoegen")}}"><div class="clickableitem">
                            <i class="fa fa-user-plus" aria-hidden="true"></i><br>
                            <span>Klanten Toevoegen</span>
                        </div></a>
                        <a href="{{URL::to("/klantenoverzicht")}}"><div class="clickableitem">
                                <i class="fa fa-users" aria-hidden="true"></i><br>
                                <span>Klanten beheren</span>
                            </div></a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
