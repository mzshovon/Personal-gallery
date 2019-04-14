@extends('layouts.main')

@section('content')
<div class="callout primary">
<div class="row column">
<h1>Create Gallery</h1>
<p class="lead">Start upload photos and create your own gallery.</p>
</div>
</div>

<div class="row small-up-2 medium-up-3 large-up-4">
	<div class="main">
		{!! Form::open(array('action' => 'GalleryController@store', 'enctype' => 'multipart/form-data')) !!}
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name',$value=null, $attributes = ['placeholder' => 'Galery Name', 'name'=> 'name']) !!}

			{!! Form::label('description', 'Description') !!}
			{!! Form::text('name',$value=null, $attributes = ['placeholder' => 'Gallery Description', 'name'=> 'description']) !!}

			{!! Form::label('cover_image', 'Cover image') !!}
			{!! Form::file('cover_image') !!}

			{!! Form::submit('Submit',$attributes= ['class'=>'button']) !!}

		{!! Form::close() !!}
	</div>

</div>

@endsection