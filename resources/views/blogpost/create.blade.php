@extends ('bloglayouts.master')

@section('content')
 <div class="col-sm-8 blog-main">
<h3>craete a post</h3>


<form method="POST" action="/bposts">
	{{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>
  <div class="form-group">
    <label for="body">BODY</label>
   <textarea id="body" name="body"  class="form-control"  >  </textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Done</button>



 @include('bloglayouts.error')
</form>
</div>


@endsection