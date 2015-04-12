@extends('layouts.dashboard.master')

@section('content')
	<h1>Create New Song</h1>

	@include('errors.list')

	{!! Form::model($song = new \CompassHB\Www\Song, ['url' => 'songs']) !!}
		@include('dashboard.songs.form', ['submitButtonText' => 'Create Song'])
	{!! Form::close() !!}

@endsection