@extends('bloglayouts.master')

@section('content')
 <div class="col-sm-8 blog-main">

register

<form method="POST" action="/register">
	{{csrf_field()}}
	<div class="form-group">
		<label for="name"> Name</label>
		<input type="text" name="name" id="name" class="form-control">
	</div>


	<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>



  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  

  <div class="form-group">
    <label for="password_confirmation">retype password:</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  @include('bloglayouts.error')

</form>
</div>
@endsection