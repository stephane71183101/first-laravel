<!--extend layout master.blade.php -->
@extends('layouts/master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Eye')
 
<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')

<h2>Create new message: </h2>
 
<form action="/create" method="post">
   <input type="text" name="title" placeholder="Title">
   <br>
   <input type="text" name="content" placeholder="Content">
   <!-- this blade directive is necessary for all form posts somewhere in between
       the form tags -->
   @csrf
   <br>
   <button type="submit">Submit</button>
</form>
 
<ul>
<!-- loops through the $messages, that this blade template
   gets from MessageController.php. for each element of the loop which
   we call $message we print the properties (title, content
   and created_at in an <li> element -->
@foreach ($messages as $message)

   <li>
      <h4>
      <!-- this link to the message details is created dynamically
            and will point to /messages/1 for the first message -->
      <a href="/message/{{$message->id}}">{{$message->title}}:</a>
      </h4>
      <h5>{{$message->content}}</h5>
      <h6>{{$message->created_at->diffForHumans()}}</h6>
         
   </li>

@endforeach

</ul>
 
@endsection