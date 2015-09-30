@extends('master')

@section('content')
    <div class="container">
        <div class="form-group">
            {!!   Form::open(array('url' => 'login')) !!}

            <p>
                {!! $errors->first('email') !!}
                {!! $errors->first('password') !!}
            </p>

            <p>Email/Phone :</p>
            <p>{!! Form::text('email') !!}</p>

            <p>Password :</p>
            <p>{!! Form::password('password') !!}</p>

            <p>{!!Form::submit('Submit') !!}</p>

            {!!Form::close() !!}
        </div>
    </div>

    @stop

@section('footer')
    @stop


