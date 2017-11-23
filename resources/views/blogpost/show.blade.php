@extends ('bloglayouts.master')

@section('content')
<div class="col-sm-8 blog-main">
<h1>{{$post->title}}</h1>
{{$post->body}}


<div class="Comment"> <!--display comment-->

@foreach($post->comment as $comment)
<ul class="list-group">
	<li class="list-group-item">
		{{$comment->created_at->diffForHumans()}}

{{$comment->body}}
</li>

</ul>
@endforeach      <!--end of display-->
</div>

<hr>


<div class="card">

   <div class="card-block">


  	<form  method="POST"  action="/posts/{{$post->id}}/comment">

  		{{csrf_field()}}

   		<div class="form-group">
  		 	<textarea name="body" placeholder="Comment here" class="form-control"></textarea>
  			</div>


  		<div class="form-group">
  			 <button type="submit" class="btn btn-primary">submit comment</button>
		</div>


		@include('bloglayouts.error')
</form>
</div>
</div><!--end card-->

</div>
@endsection