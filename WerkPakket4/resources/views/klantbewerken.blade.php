@extends('layouts.app')

@section('content')
    @if (Auth::guest())
        <script type="text/javascript">
            window.location = "login";//here double curly bracket
        </script>
    @else
        @foreach($users as $user)
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Klant Wijzigen</div>

                        <div class="panel-body">
                            <article class="main">
                                <form class="form-horizontal" style="width:80%;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" role="form" method="POST" action="editklant">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="klantid" value="{{$user->klantid}}">
                                    <div class="form-group{{ $errors->has('voornaam') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Voornaam</label>

                                        <div class="col-md-6">
                                            <input id="vname" type="text" class="form-control" value="{{ $user->Voornaam }}" name="vname" required autofocus>

                                            @if ($errors->has('voornaam'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('voornaam') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>  <br>

                                    <div class="form-group{{ $errors->has('achternaam') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Achternaam</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" value="{{ $user->Naam }}" name="name" required autofocus>

                                            @if ($errors->has('achternaam'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('achternaam') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>  <br>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-mailadres</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" value="{{ $user->email }}" name="email" value="" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div> <br>

                                    <div class="form-group{{ $errors->has('gsm') ? ' has-error' : '' }}">
                                        <label for="gsm" class="col-md-4 control-label">GSM nummer</label>

                                        <div class="col-md-6">
                                            <input id="gsm" type="tel" class="form-control" name="gsm" value="{{ $user->gsm }}" required>

                                            @if ($errors->has('gsm'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('gsm') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div> <br>

                                    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                        <label for="tel" class="col-md-4 control-label">telefoon nummer</label>

                                        <div class="col-md-6">
                                            <input id="tel" type="tel" class="form-control" value="{{ $user->telefoon }}" name="tel"  required>

                                            @if ($errors->has('tel'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div> <br>

                                    <div class="form-group{{ $errors->has('straat') ? ' has-error' : '' }}">
                                        <label for="straat" class="col-md-4 control-label">Straat</label>

                                        <div class="col-md-6">
                                            <input id="straat" type="text" class="form-control" name="straat" value="{{ $user->straat }}" required>

                                            @if ($errors->has('straat'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('straat') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div> <br>

                                    <div class="form-group{{ $errors->has('gemeente') ? ' has-error' : '' }}">
                                        <label for="gemeente" class="col-md-4 control-label">Gemeente</label>

                                        <div class="col-md-6">
                                            <input id="gemeente" type="text" class="form-control" name="gemeente" value="{{ $user->gemeente }}" required>

                                            @if ($errors->has('gemeente'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('gemeente') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div> <br>
                                    <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                        <label for="postcode" class="col-md-4 control-label">Postcode</label>

                                        <div class="col-md-6">
                                            <input id="gemeente" type="text" pattern="[0-9]{4}" class="form-control" name="postcode" value="{{ $user->postcode }}" required>

                                            @if ($errors->has('postcode'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div> <br>


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Wijzigen
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
@endsection
