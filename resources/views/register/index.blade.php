@extends('master')

@section('content')
    @if ($errors->any())

        <ul style="color:red;">

            {{ implode('', $errors->all('<li>:message</li>')) }}

        </ul>

    @endif

    @if (Session::has('message'))

        <p>{{ Session::get('message') }}</p>

    @endif
    <div class="container">
        <div class="form-group">
            {!!   Form::open(array('url' => 'register_action')) !!}

            <p>Select :</p>
            <p>Land Owner :</p>
            <p>{!! Form::radio('type', 'Land Owner') !!}</p>
            <p>Land Developer :</p>
            <p>{!! Form::radio('type', 'Land Developer') !!}</p>

            <p>Name :</p>
            <p>{!! Form::text('name') !!}</p>

            <p>Email :</p>
            <p>{!! Form::text('email') !!}</p>

            <p>Phone :</p>
            <p>{!! Form::text('phone') !!}</p>

            <p>City :</p>
            <p>{!! Form::select('city', ['Dhaka Metro', 'Chittagong', 'Kulna', 'Barishal' , 'Sylhet', 'Rajshahi']) !!}</p>

            <p>Area :</p>
            <p>{!! Form::select('area', ['Dhanmondi', 'Gulshan', 'Uttara','Banani']) !!}</p>

            <p>Password :</p>
            <p>{!! Form::password('password') !!}</p>
            <p>Confirm Password :</p>
            <p>{!! Form::password('cpassword') !!}</p>

            <p>{!!Form::submit('Submit') !!}</p>

            {!!Form::close() !!}
        </div>
    </div>

@stop

@section('footer')
@stop