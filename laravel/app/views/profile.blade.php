@extends('layout.base')

@section('main')
  <h2>Welcome "{{ Auth::user()->username }}" to the protected page!</h2>
  <p>Your user ID is: {{ Auth::user()->id }}</p>
@stop