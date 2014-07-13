@extends('layout.base')


@section('head')
<title>Register for mymoggy</title>
@stop

@section('main')
	<p>registration form </p>
	
	{{ Form::open(array('url' => 'register', 'class' => 'form-horizontal')) }}	
	    <!-- username field -->
    <p>
        {{ Form::label('email', 'Email') }}<br/>
        {{ Form::text('email', Input::old('email')) }}
        {{ $errors->first('email')}}
    </p>

    <!-- password field -->
    <p>
        {{ Form::label('password', 'Password') }}<br/>
        {{ Form::password('password') }}
        {{ $errors->first('password')}}
    </p>
    <p>
        {{ Form::label('firstname', 'First name') }}<br/>
        {{ Form::text('firstname') }}
        {{ $errors->first('firstname')}}
    </p>
    <p>
        {{ Form::label('lastname', 'Last name') }}<br/>
        {{ Form::text('lastname') }}
        {{ $errors->first('lastname')}}
    </p>
    <p>
        {{ Form::label('address1', 'Address line 1') }}<br/>
        {{ Form::text('address1') }}
        {{ $errors->first('address1')}}
    </p>
    <p>
        {{ Form::label('address2', 'Address line 2') }}<br/>
        {{ Form::text('address2') }}
        {{ $errors->first('address2')}}
    </p>
    <p>
        {{ Form::label('town', 'Town') }}<br/>
        {{ Form::text('town') }}
        {{ $errors->first('town')}}
    </p>
    <p>
        {{ Form::label('postcode', 'Postcode') }}<br/>
        {{ Form::text('postcode') }}
        {{ $errors->first('postcode')}}
    </p>
    <p>
        {{ Form::label('phone', 'Phone') }}<br/>
        {{ Form::text('phone') }}
        {{ $errors->first('phone')}}
    </p>
    <p>
        {{ Form::label('twitter', 'Twitter') }}<br/>
        {{ Form::text('twitter') }}
        {{ $errors->first('twitter')}}
    </p>
    <p>
        {{ Form::label('facebook', 'Facebook') }}<br/>
        {{ Form::text('facebook') }}
        {{ $errors->first('facebook')}}
    </p>

    <!-- submit button -->
    <p>{{ Form::submit('Register') }}</p>
	{{ Form::close()}}
@stop

@section('footer')
	Registration footer goes here
@stop
