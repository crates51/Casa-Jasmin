@extends('layouts.app')

@section('content')
	<h1>Creare Postare</h1>
	{!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype'=>'multipart/form-data']) !!}
		<div class="form-group">
			{{Form::label('title','Titlu')}}
			{{Form::text('title','',['class' =>'form-control','placeholder' => 'Titlu'])}}
		</div>
		<div class="form-group">
			{{Form::label('body','Corp')}}
			{{Form::textarea('body','',['id' => 'article-ckeditor', 'class' =>'form-control','placeholder' => 'Body Text'])}}
		</div>
		<div class="form-group">
			{{Form::file('cover_image')}}
		</div>	
		{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection