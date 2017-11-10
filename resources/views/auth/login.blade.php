@extends('layouts.app')

@section('content')



@guest
<div class="flex-center position-ref mid-height">

    <div class="content">
        <div class="title m-b-md">
            Centro de Ludopatia
        </div>
    </div>

</div>

<div class="row">
<div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">


            <div class="panel-heading">Login</div>



            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-3 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@else

<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Centro de Ludopatia
        </div>

        <div class="links">
            <a href='/paciente'>Pacientes</a>
        </div>
    </div>
</div>

@endguest



@endsection

