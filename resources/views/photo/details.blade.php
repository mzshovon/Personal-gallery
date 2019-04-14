@extends('layouts.main')

@section('content')
<div class="callout primary">
<div class="row column">
	<a href="/show/{{$photo->gallery_id}}">Back to gallery</a>
<h1>{{$photo->title}}</h1>
<p class="lead">{{$photo->description}}</p>
<p>Location: {{$photo->location}}</p>
</div>
</div>

<div class="row small-up-2 medium-up-3 large-up-4">
	<div class="main">
		
<img id="main-img" class="thumbnail" src="/images/{{$photo->image}}">

</div>




@endsection