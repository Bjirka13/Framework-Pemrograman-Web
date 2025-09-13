@extends('app')

@section('content')
    <h1>Company Profile</h1>
	<video width="640" height="360" controls>
    <source src="{{ asset($video) }}" type="video/mp4">
	</video>
@endsection