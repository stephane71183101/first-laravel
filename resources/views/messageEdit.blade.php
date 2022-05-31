<!--extend layout master.blade.php -->
@extends('layouts.master')
<!--sets value for section title to "Mini Twitter" (section title is used
in messages.blade.php) -->
@section('title', 'Mini Twitter')
<!--starts section content, defines some html for section content and end
section content
ts value for section title to "Mini Twitter" (section content is used in
messages.blade.php) -->
@section('content')
<h2>Message Details:</h2>
<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p>

<form action="/create" method="put">
   <input type="text" name="title" placeholder="{{$message->title}}">
   <input type="text" name="content" placeholder="{{$message->content}}">
   @csrf
   @method('put')
   <button type="submit">Save</button>
</form>
<br>
@endsection