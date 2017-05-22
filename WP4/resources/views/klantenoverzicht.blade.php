@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <script type="text/javascript">
            window.location = "login";//here double curly bracket
        </script>
    @else
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Klanten overzicht</div>

                        <div class="panel-body">
                            <article class="clienst">
                                <div class="client">
                                    @foreach($users as $user)
                                        <p>{{ $user->Naam." ".$user->Voornaam }}</p>
                                        <object><button type="button" onclick="window.location='klantedit/{{ $user->klantid }}'" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Bewerken</button>
                                            <button type="button" onclick="window.location='klantremove/{{ $user->klantid }}'"  class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Verwijderen</button></object>
                                    @endforeach

                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection