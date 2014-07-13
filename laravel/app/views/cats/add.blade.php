@extends('layout.base')


@section('head')
<title>Add your cat</title>
@stop

@section('main')

{{$userid}}
	<p>registration form </p>
	
	{{ Form::open(array('url' => 'add', 'class' => 'form-horizontal')) }}	
	
	
	{{ Form::hidden('user_id', $userid)}}
	    <!-- username field -->
    <p>
        {{ Form::label('name', 'Name') }}<br/>
        {{ Form::text('name', Input::old('name')) }}
    </p>
    <p>
        {{ Form::label('breed', 'Breed') }}<br/>
        {{ Form::text('breed', Input::old('breed')) }}
    </p>
    <p>
        {{ Form::label('coat', 'Coat') }}<br/>
        {{ Form::text('coat', Input::old('coat')) }}
    </p>
    <p>
        {{ Form::label('sex', 'Sex') }}<br/>
        {{ Form::radio('sex', 'M', true)}}
        {{ Form::radio('sex', 'F')}}
    </p>
    <p>
        {{ Form::label('altered', 'Altered') }}<br/>
        {{ Form::radio('altered', 'Y', true)}}
        {{ Form::radio('altered', 'N')}}
    </p>
    <p>
        {{ Form::label('collar', 'Collar?') }}<br/>
        {{ Form::radio('collar', 'Y', true)}}
        {{ Form::radio('collar', 'N')}}
    </p>
    <p>
        {{ Form::label('chipserial', 'Chip Serial') }}<br/>
        {{ Form::text('chipserial', Input::old('chipserial')) }}
    </p>
    <p>
        {{ Form::label('dob', 'Date of birth') }}<br/>
        {{ Form::text('dob', Input::old('dob')) }}
    </p>
    <p>
        {{ Form::label('colour', 'Colour') }}<br/>
        {{ Form::textarea('colour', Input::old('colour')) }}
    </p>
    <p>
        {{ Form::label('markings', 'Marking') }}<br/>
        {{ Form::textarea('markings', Input::old('markings')) }}
    </p>
    <p>
        {{ Form::label('personality', 'Personality') }}<br/>
        {{ Form::textarea('personality', Input::old('personality')) }}
    </p>

    <!-- submit button -->
    <p>{{ Form::submit('add this cat') }}</p>
	{{ Form::close()}}
@stop

@section('footer')
	Add cat footer goes here
@stop
